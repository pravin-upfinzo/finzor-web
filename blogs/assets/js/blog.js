
// Get elements
var selectList = document.getElementById('category-select');
var allPostItems = document.querySelectorAll('.post-column');
var loadMoreButton = document.getElementById('load-more-container');
var showItemsCount=3;

// Initial Display
showItems('all');

// Event Listener for Select Change
if(selectList!==null){
    selectList.addEventListener('change', function() {
        var selectedCategory = this.value;
        showItems(selectedCategory);
    });
}



// Function to Show/Hide Blog Items
function showItems(category) {
    var visibleCount = 0;
    
    allPostItems.forEach(function(item) {
        // Show All
        if (category === 'all') {
            item.style.display = 'none';
            if (visibleCount < showItemsCount) {
                item.style.display = 'block';
                visibleCount++;
            }
        }
        // Show Category-specific
        else {
            if (item.classList.contains(category)) {
                item.style.display = 'none';
                if (visibleCount < showItemsCount) {
                    item.style.display = 'block';
                    visibleCount++;
                }
            } else {
                item.style.display = 'none';
            }
        }
    });

    // Show/Hide Load More Button
    var totalItems = (category === 'all') 
        ? allPostItems.length 
        : document.querySelectorAll('.post-column.' + category).length;
        
    if (visibleCount < totalItems) {
        loadMoreButton.style.display = 'block';
    } else {
        loadMoreButton.style.display = 'none';
    }

    // Update Load More Event
    loadMoreButton.onclick = function() {
        loadMore(category, visibleCount);
    };
}

// Function to Load More Items
function loadMore(category, visibleCount) {
    var displayed = 0;

    allPostItems.forEach(function(item) {
        if (category === 'all' || item.classList.contains(category)) {
            if (item.style.display === 'none' && displayed < showItemsCount) {
                item.style.display = 'block';
                displayed++;
            }
        }
    });

    // Check if more items can be displayed
    var totalItems = (category === 'all') 
        ? allPostItems.length 
        : document.querySelectorAll('.post-column.' + category).length;
        
    visibleCount += displayed;

    if (visibleCount < totalItems) {
        loadMoreButton.style.display = 'block';
    } else {
        loadMoreButton.style.display = 'none';
    }
}