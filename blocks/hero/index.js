const { registerBlockType } = wp.blocks;
const { createElement, Fragment } = wp.element;
const { TextControl } = wp.components;

const renderHero = ({ eyebrow, title, description, button1Text, button2Text }) => (
  createElement(
    'section',
    { className: 'page-hero h-screen relative border-b-2 border-gray-300' },
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
          { className: 'text-7xl mb-8 tracking-tight border-b-2 border-gray-900 pb-6 inline-block' },
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
            { className: 'px-8 py-4 border-2 border-gray-900 bg-gray-900 text-white', href: '#' },
            button1Text || 'Button 1 text'
          ),
          createElement(
            'a',
            { className: 'px-8 py-4 border-2 border-gray-900', href: '#' },
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
        label: 'Hero Button 2 Text',
        value: attributes.button2Text,
        onChange: (value) => setAttributes({ button2Text: value }),
      }),
      renderHero(attributes)
    )
  ),
  save: ({ attributes }) => renderHero(attributes),
});
