jQuery(function($) {
    let page = 2; // first page already loaded
    let loading = false;
    let finished = false;
  
    function loadMorePosts() {
      if (loading || finished) return;
      loading = true;
  
      $.post(pg_ajax.ajax_url, {
        action: 'pg_load_more_posts',
        page: page
      }, function(data) {
        if ($.trim(data) === '') {
          finished = true; // no more posts
        } else {
          $('.blog-grid').append(data);
          page++;
        }
        loading = false;
      });
    }
  
    $(window).on('scroll', function() {
      if (loading || finished) return;
      if ($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
        loadMorePosts();
      }
    });
  });
  