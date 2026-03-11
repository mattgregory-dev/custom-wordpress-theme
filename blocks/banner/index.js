const { registerBlockType } = wp.blocks;
const { createElement } = wp.element;
const { TextControl } = wp.components;

registerBlockType('cwp/banner', {
  edit: ({ attributes, setAttributes }) => {
    const { text } = attributes;

    return createElement(
      'div',
      null,
      createElement(TextControl, {
        label: 'Banner Text',
        value: text,
        onChange: (value) => setAttributes({ text: value }),
      }),
      createElement('div', null, `Preview: ${text}`)
    );
  },
  save: ({ attributes }) => {
    const { text } = attributes;
    return createElement('div', { className: 'banner-block' }, text);
  },
});
