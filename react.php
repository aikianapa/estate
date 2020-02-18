<?php
ini_set('session.gc_maxlifetime', 28800); // 8 * 60 * 60
require "./engine/engine.php";
?>
<html>
<head>

</head>
<body>
<div id="root">
  <script crossorigin src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
  <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
  <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
  <script src="/engine/js/jquery.min.js"></script>
  <script src="/engine/js/wbapp.js"></script>

  <script type="text/babel">
  const { Component } = React;
  const { render } = ReactDOM;
  const node = $("#root")[0];
  const uri = "http://work10.loc/ajax/todo/get/";

  class TodoList extends React.Component {

          constructor() {
              super();
              this.state = {
                  items: [],
                  isLoaded: false
              }
          }
          componentDidMount() {
              fetch(uri)
                  .then(results => results.json())
                  .then(json => {
                          this.setState({
                              isLoaded: true,
                              items: json
                          })
                      });
                  }

              render() {

                  let {
                      isLoaded,
                      items
                  } = this.state;
                  if (!isLoaded) {
                      return (<div> Loading... </div>)
                  } else {
                      return ( <div>
                          <ul>
                              {items.map((item, key) => (
                                  <li key="{key}">
                                      test: {item.task}
                                  </li>
                              ))}
                          </ul>
                          </div>
                      );
                  }
              }
          }

  ReactDOM.render(<TodoList name="World" />,node );
  </script>

</div>

</body>
</html>
