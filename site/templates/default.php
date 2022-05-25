<?= css('assets/css/index.css') ?>
<?= css('assets/codemirror/lib/codemirror.css') ?>
<?= css('assets/codemirror/theme/duotone-dark.css') ?>

<form id="form" method="post">
  <textarea id="query" placeholder="Query …"></textarea>
  <textarea id="result"></textarea>
  <input type="submit" value="Execute">
</form>

<?= js([
  'assets/codemirror/lib/codemirror.js',
  'assets/codemirror/addon/edit/matchbrackets.js',
  'assets/codemirror/addon/comment/continuecomment.js',
  'assets/codemirror/addon/comment/comment.js',
  'assets/codemirror/mode/javascript/javascript.js',
]) ?>

<script>
  // dom elements
  const form        = document.querySelector("#form");
  const queryInput  = document.querySelector("#query");
  const resultInput = document.querySelector("#result");

  // shared editor settings
  const settings = {
    matchBrackets: true,
    autoCloseBrackets: true,
    indentUnit: 2,
    tabSize: 2,
    theme: "duotone-dark",
    mode: "application/ld+json",
    lineWrapping: false,
    lineNumbers: true,
  };

  // query example
  const example = {
    query: "page('photography').children",
    select: {
      url: true,
      id: true,
      title: "page.title",
      description: "page.description.kirbytext",
      images: {
        query: "page.images",
        select: {
          url: true,
          niceSize: true,
          alt: "file.alt.kirbytext"
        }
      }
    }
  };

  // pretty json creator
  const prettyJson = (json) => {
    return JSON.stringify(json, null, 2);
  };

  // query editor
  const editor = CodeMirror.fromTextArea(queryInput, {
    autofocus: true,
    ...settings
  });

  // result preview
  const result = CodeMirror.fromTextArea(resultInput, {
    readOnly: true,
    ...settings
  });

  // insert the example
  editor.setValue(prettyJson(example));

  // send a query to the KQL backend
  const query = async () => {
    try {
      const query = JSON.parse(editor.getValue());
      const response = await fetch("/api/query", {
        method: "POST",
        body: JSON.stringify(query)
      });

      const json = await response.json();

      result.setValue(prettyJson(json));

    } catch (e) {
      alert(e);
    }
  };

  // hook up the form submit action
  form.addEventListener("submit", function(e) {
    e.preventDefault();
    query();
  });

  // run the example query
  query();
</script>
