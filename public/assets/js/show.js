import showdown from 'showdown';

function convertMarkdownToHTML(markdownContent) {
  const converter = new showdown.Converter();
  return converter.makeHtml(markdownContent);
}

const markdownContent = '# Titre de l\'article\n\nContenu de l\'article en **Markdown**';
const htmlContent = convertMarkdownToHTML(markdownContent);

console.log(htmlContent);
