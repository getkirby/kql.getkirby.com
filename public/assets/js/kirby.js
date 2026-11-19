(function(window) {

  window.Kirby = {
    options: {
      api: '/api',
      csrf: null
    },
    query(query) {
      return this.request(query);
    },
    request(data) {
      return fetch(this.options.api + '/query?csrf=' + this.options.csrf, {
        method: 'POST',
        body: JSON.stringify(data)
      })
        .then(response => {
          return response.json();
        });
    }
  };

})(window);

