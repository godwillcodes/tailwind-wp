jQuery(function($) {
    let page = 2; // first page already loaded
    let loading = false;
    let finished = false;
  
    function loadMorePosts() {
      if (loading || finished) return;
      loading = true;
      
      // Add loading indicator
      const loadingHtml = '<div class="col-span-full flex justify-center py-8"><div class="animate-spin rounded-full h-8 w-8 border-b-2 border-[#D16555]"></div></div>';
      $('.blog-grid').append(loadingHtml);
  
      $.post(pg_ajax.ajax_url, {
        action: 'pg_load_more_posts',
        page: page
      }, function(data) {
        // Remove loading indicator
        $('.blog-grid .animate-spin').parent().remove();
        
        if ($.trim(data) === '') {
          finished = true; // no more posts
          // Add "no more posts" message
          $('.blog-grid').append('<div class="col-span-full text-center py-8 text-gray-500">No more posts to load</div>');
        } else {
          $('.blog-grid').append(data);
          page++;
          
          // Refresh AOS for new elements
          if (typeof AOS !== 'undefined') {
            AOS.refresh();
          }
        }
        loading = false;
      }).fail(function() {
        // Remove loading indicator on error
        $('.blog-grid .animate-spin').parent().remove();
        loading = false;
        console.error('Failed to load more posts');
      });
    }
  
    $(window).on('scroll', function() {
      if (loading || finished) return;
      if ($(window).scrollTop() + $(window).height() > $(document).height() - 200) {
        loadMorePosts();
      }
    });
  });
  