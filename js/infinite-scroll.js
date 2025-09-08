jQuery(function($) {
    let page = 2; // first page already loaded
    let loading = false;
    let finished = false;
    let currentGrid = '';
    let currentCategory = '';
  
    // Initialize based on which grid is present
    function initLoadMore() {
      if ($('.blog-grid').length > 0) {
        currentGrid = '.blog-grid';
        currentCategory = 'blog';
      } else if ($('.press-grid').length > 0) {
        currentGrid = '.press-grid';
        currentCategory = 'press';
      } else if ($('.ebooks-grid').length > 0) {
        currentGrid = '.ebooks-grid';
        currentCategory = 'ebooks';
      }
    }
  
    function loadMorePosts() {
      if (loading || finished || !currentGrid) return;
      loading = true;
      
      // Add loading indicator
      const loadingHtml = '<div class="col-span-full flex justify-center py-8"><div class="animate-spin rounded-full h-8 w-8 border-b-2 border-[#D16555]"></div></div>';
      $(currentGrid).append(loadingHtml);
  
      // Determine which AJAX action to use
      let action = 'pg_load_more_posts';
      if (currentCategory === 'ebooks') {
        action = 'pg_load_more_ebooks';
      }

      $.post(pg_ajax.ajax_url, {
        action: action,
        page: page,
        category: currentCategory
      }, function(data) {
        // Remove loading indicator
        $(currentGrid + ' .animate-spin').parent().remove();
        
        if ($.trim(data) === '') {
          finished = true; // no more posts
          // Add "no more posts" message
          $(currentGrid).append('<div class="col-span-full text-center py-8 text-gray-500">No more posts to load</div>');
        } else {
          $(currentGrid).append(data);
          page++;
          
          // Refresh AOS for new elements
          if (typeof AOS !== 'undefined') {
            AOS.refresh();
          }
        }
        loading = false;
      }).fail(function() {
        // Remove loading indicator on error
        $(currentGrid + ' .animate-spin').parent().remove();
        loading = false;
        console.error('Failed to load more posts');
      });
    }
  
    // Initialize on page load
    initLoadMore();
  
    // Load more button click handler
    $(document).on('click', '.load-more-btn', function(e) {
      e.preventDefault();
      loadMorePosts();
    });
  
    // Infinite scroll
    $(window).on('scroll', function() {
      if (loading || finished || !currentGrid) return;
      if ($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
        loadMorePosts();
      }
    });
  });
  