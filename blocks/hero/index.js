const { registerBlockType } = wp.blocks;
const { createElement, Fragment } = wp.element;
const { TextControl } = wp.components;

registerBlockType('cwp/hero', {
  edit: ({ attributes, setAttributes }) => {
    const { title, description } = attributes;

    return createElement(
      Fragment,
      null,
      createElement(TextControl, {
        label: 'Hero Title',
        value: title,
        onChange: (value) => setAttributes({ title: value }),
      }),
      createElement(TextControl, {
        label: 'Hero Description',
        value: description,
        onChange: (value) => setAttributes({ description: value }),
      }),
      createElement(
        'div',
        { className: 'hero min-h-screen flex items-center justify-center' },
        createElement(
          'div',
          { className: 'hero-inner flex flex-col items-center text-center' },
          createElement('h1', null, title),
          createElement('p', null, description)
        )
      )
    );
  },
  save: ({ attributes }) => {
    const { title, description } = attributes;

    return createElement(
      'div',
      { className: 'hero min-h-screen flex items-center justify-center' },
      createElement(
        'div',
        { className: 'hero-inner flex flex-col items-center text-center' },
        createElement('h1', null, title),
        createElement('p', null, description)
      )
    );
  },
});
