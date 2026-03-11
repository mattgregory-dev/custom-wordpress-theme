const { registerBlockType } = wp.blocks;
const { createElement, Fragment } = wp.element;
const { MediaUpload, MediaUploadCheck } = wp.blockEditor;
const { Button, ColorPicker, TextControl } = wp.components;

const normalizeColorValue = (value) => {
  if (typeof value === 'string') {
    return value;
  }

  if (value && typeof value === 'object') {
    if (value.hex) {
      return value.hex;
    }

    if (value.rgb) {
      const { r, g, b, a } = value.rgb;
      if (typeof a === 'number') {
        return `rgba(${r}, ${g}, ${b}, ${a})`;
      }
      return `rgb(${r}, ${g}, ${b})`;
    }
  }

  return '';
};

const renderHero = ({
  eyebrow,
  title,
  description,
  button1Text,
  button1Url,
  button2Text,
  button2Url,
  backgroundImageUrl,
  overlayColor,
}) => (
  createElement(
    'section',
    {
      className: 'page-hero h-screen relative',
      style: {
        ...(backgroundImageUrl ? { backgroundImage: `url(${backgroundImageUrl})` } : {}),
        '--hero-overlay': overlayColor || 'rgba(0, 0, 0, 0.4)',
      },
    },
    createElement(
      'div',
      { className: 'relative h-full flex items-center justify-center' },
      createElement(
        'div',
        { className: 'max-w-3xl mx-auto px-8 text-center' },
        createElement(
          'div',
          { className: 'mb-6' },
          createElement(
            'span',
            { className: 'text-xs tracking-[0.2em] border border-gray-400 px-4 py-2 inline-block' },
            eyebrow || 'Hero eyebrow'
          )
        ),
        createElement(
          'h1',
          { className: 'text-7xl mb-8 tracking-tight text-gray-900 border-b-2 border-gray-900 pb-6 inline-block' },
          title || 'Hero title'
        ),
        createElement(
          'p',
          { className: 'text-xl leading-relaxed mb-12 max-w-2xl mx-auto' },
          description || 'Hero description'
        ),
        createElement(
          'div',
          { className: 'flex gap-4 justify-center' },
          createElement(
            'a',
            { className: 'px-8 py-4 border-2 border-gray-900 bg-gray-900 text-white', href: button1Url || '#' },
            button1Text || 'Button 1 text'
          ),
          createElement(
            'a',
            { className: 'px-8 py-4 border-2 border-gray-900', href: button2Url || '#' },
            button2Text || 'Button 2 text'
          )
        )
      )
    )
  )
);

registerBlockType('cwp/hero', {
  edit: ({ attributes, setAttributes }) => (
    createElement(
      Fragment,
      null,
      createElement(TextControl, {
        label: 'Hero Eyebrow',
        value: attributes.eyebrow,
        onChange: (value) => setAttributes({ eyebrow: value }),
      }),
      createElement(TextControl, {
        label: 'Hero Title',
        value: attributes.title,
        onChange: (value) => setAttributes({ title: value }),
      }),
      createElement(TextControl, {
        label: 'Hero Description',
        value: attributes.description,
        onChange: (value) => setAttributes({ description: value }),
      }),
      createElement(TextControl, {
        label: 'Hero Button 1 Text',
        value: attributes.button1Text,
        onChange: (value) => setAttributes({ button1Text: value }),
      }),
      createElement(TextControl, {
        label: 'Hero Button 1 URL',
        value: attributes.button1Url,
        onChange: (value) => setAttributes({ button1Url: value }),
      }),
      createElement(TextControl, {
        label: 'Hero Button 2 Text',
        value: attributes.button2Text,
        onChange: (value) => setAttributes({ button2Text: value }),
      }),
      createElement(TextControl, {
        label: 'Hero Button 2 URL',
        value: attributes.button2Url,
        onChange: (value) => setAttributes({ button2Url: value }),
      }),
      createElement(
        MediaUploadCheck,
        null,
        createElement(MediaUpload, {
          onSelect: (media) => setAttributes({
            backgroundImageId: media?.id || null,
            backgroundImageUrl: media?.url || '',
          }),
          allowedTypes: ['image'],
          value: attributes.backgroundImageId,
          render: ({ open }) => (
            createElement(
              Button,
              { variant: 'secondary', onClick: open },
              attributes.backgroundImageUrl ? 'Replace Background Image' : 'Select Background Image'
            )
          ),
        })
      ),
      createElement('p', null, 'Hero Overlay Color'),
      createElement(ColorPicker, {
        color: attributes.overlayColor || 'rgba(0, 0, 0, 0.4)',
        onChangeComplete: (value) => {
          console.log('[cwp/hero] ColorPicker value:', value);
          console.log('[cwp/hero] ColorPicker type:', typeof value);
          if (value && typeof value === 'object') {
            console.log('[cwp/hero] ColorPicker keys:', Object.keys(value));
          }

          setAttributes({ overlayColor: normalizeColorValue(value) });
        },
        disableAlpha: false,
      }),
      createElement('p', null, `Overlay value: ${attributes.overlayColor || 'rgba(0, 0, 0, 0.4)'}`),
      renderHero(attributes)
    )
  ),
  save: ({ attributes }) => renderHero(attributes),
});
