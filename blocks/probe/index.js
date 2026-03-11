const { registerBlockType } = wp.blocks;
const { createElement } = wp.element;
const { TextControl } = wp.components;

registerBlockType('cwp/probe', {
  edit: ({ attributes, setAttributes }) => {
    const { message } = attributes;

    return createElement(
      'div',
      null,
      createElement(TextControl, {
        label: 'Probe Message',
        value: message,
        onChange: (value) => setAttributes({ message: value }),
      }),
      createElement('div', null, `Preview: ${message}`)
    );
  },
  save: ({ attributes }) => {
    const { message } = attributes;
    return createElement('div', null, message);
  },
});
