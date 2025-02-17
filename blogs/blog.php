<?php
include_once('data-handler.php'); // Include the data handler to fetch category and posts

// Get the current URL
$currentUrl = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Parse the URL to get its components
$parsedUrl = parse_url($currentUrl);

// Construct the base URL
$baseUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];

// If using a subdirectory, add the path up to the base
$path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
if ($path) {
    $baseUrl .= $path . '/';
} else {
    $baseUrl .= '/';
}

//echo $baseUrl;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finzor - Blogs</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/css/styles.css">
</head>

<body>
  <div class = "container-fluid container-custom">
    <h1 class="primary-title">Finzor Blog</h1>

    <?php if (!$slug): ?>
    <div class="post-filter-container">
      <h3 class="secondary-title"> Filter by Category: </h3>
      <!-- <select class="filter-select-list">
        <option class="filter-select-list__option"> All </option>
        <option class="filter-select-list__option"> Live Music </option>
        <option class="filter-select-list__option"> Album Reviews </option>
        <option class="filter-select-list__option"> Playing Music </option>
        <option class="filter-select-list__option"> Music Production </option>
      </select> -->

        <select id="category-select" class="filter-select-list">
            <option value="all">All</option>
            <?php foreach ($categoriesData as $categoryKey => $categoryDetails) : ?>
                <option value="<?= $categoryKey; ?>"><?= ucfirst($categoryKey); ?></option>
            <?php endforeach; ?>
        </select>



    </div>
    <?php endif; ?>
    

    <div class = "row row-custom">
    

      <!-- new content -->
    <?php if ($slug && $postContent): ?>

        <article>
            <h2><?php echo htmlspecialchars($postContent['title']); ?></h2>
            <p><small>Posted on: <?php echo htmlspecialchars($postContent['date']); ?></small></p>
            <p><?php echo htmlspecialchars($postContent['short_description']); ?></p>
            <div><?php echo $postContent['content']; ?></div>
        </article>
     
        
    <?php else: ?>
        <?php if (!empty($posts)): ?>

            <?php //echo "<pre>"; print_r($posts); 
            foreach ($posts as $cate_key => $ind_post): ?>
                <?php foreach ($ind_post as $post): ?>
                    <div class = "col-sm-12 col-md-6 col-lg-4 post-column <?= $cate_key; ?>">
                        <?php if ($post['banner'] != ""): ?>
                            <img class="post-column__image"  src="<?php echo $post['banner']; ?>" alt="" style="max-width:100%;">
                        <?php endif; ?>
                        <div class="meta-data">
                            <p class="meta-data__date-category truncate-1-line" ><?php echo date("d M Y", strtotime($post['date'])); ?>   |   <span ><b><?php echo ucwords(htmlspecialchars($cate_key)); ?></b></span></p>
                            
                            <a href="./<?php echo htmlspecialchars($cate_key . '/' . $post['slug']); ?>">
                                <h3 class="meta-data__title truncate-1-line"><?php echo htmlspecialchars($post['title']); ?></h3>
                            </a>
                            <p class="meta_short_desc truncate-2-lines"><?php echo htmlspecialchars($post['short_description']); ?></p>
                            <p class="meta-data__author truncate-1-line">By <span><b><i><?php echo htmlspecialchars($post['author']); ?></i></b></span></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No posts available in this category.</p>
        <?php endif; ?>


        
    <?php endif; ?>

      <!-- new content -->

    </div>

    <div id = "load-more-container">
      <button class = "load-more-button" id="load-more-button"> Load More </button>
    </div>

  </div>

<script>
/*var selectList = document.getElementsByTagName('select')[0];
var postsRow = document.getElementsByClassName('row-custom')[0];
var allPostItems = document.getElementsByClassName('post-column');

var liveMusic = document.getElementsByClassName('live-music');
var albumReviews = document.getElementsByClassName('album-reviews');
var playingMusic = document.getElementsByClassName('playing-music');
var musicProduction = document.getElementsByClassName('music-production');
var loadMoreButton = document.getElementById('load-more-container');


for (var i = 0; i < 3; i++) {
  allPostItems[i].style.display = 'block';
}

loadMoreButton.style.display = 'block';
loadMoreButton.addEventListener('click', loadMoreAll);


selectList.addEventListener('change', function() {

  loadMoreButton.removeEventListener('click', loadMoreAll);
  loadMoreButton.removeEventListener('click', loadMoreLiveMusic);
  loadMoreButton.removeEventListener('click', loadMoreAlbumReviews);
  loadMoreButton.removeEventListener('click', loadMorePlayingMusic);
  loadMoreButton.removeEventListener('click', loadMoreMusicProduction);

  for (var i = 0; i < allPostItems.length; i++) {
    allPostItems[i].style.display = 'none';
  }

  switch(this.value) {

    case "Live Music":
      for (var i = 0; i < 2; i++) {
        liveMusic[i].style.display = 'block';
        loadMoreButton.style.display = 'none';
      }

      if(liveMusic.length > 2) {
        loadMoreButton.style.display = 'block';
        loadMoreButton.addEventListener('click', loadMoreLiveMusic);
      }
      break;

    case "Album Reviews":
      for (var i = 0; i < 6; i++) {
        albumReviews[i].style.display = 'block';
        loadMoreButton.style.display = 'none';
      }

      if(albumReviews.length > 6) {
        loadMoreButton.style.display = 'block';
        loadMoreButton.addEventListener('click', loadMoreAlbumReviews);
      }
      break;

    case "Playing Music":
      for (var i = 0; i < 6; i++) {
        playingMusic[i].style.display = 'block';
        loadMoreButton.style.display = 'none';
      }

      if(playingMusic.length > 6) {
        loadMoreButton.style.display = 'block';
        loadMoreButton.addEventListener('click', loadMorePlayingMusic);
      }
      break;

    case "Music Production":
      for (var i = 0; i < 6; i++) {
        musicProduction[i].style.display = 'block';
        loadMoreButton.style.display = 'none';
      }

      if(musicProduction.length > 6) {
        loadMoreButton.style.display = 'block';
        loadMoreButton.addEventListener('click', loadMoreMusicProduction);
      }
      break;

    default:
      for (var i = 0; i < 6; i++) {
        allPostItems[i].style.display = 'block';
        loadMoreButton.style.display = 'none';
      }

      if(allPostItems.length > 6) {
        loadMoreButton.style.display = 'block';
        loadMoreButton.addEventListener('click', loadMoreAll);
      }
    }
});


function loadMoreAll() {
  for (var i = 0; i < allPostItems.length; i++) {
    allPostItems[i].style.display = 'block';
    loadMoreButton.style.display = 'none';
  }
}

function loadMoreLiveMusic() {
  for (var i = 0; i < liveMusic.length; i++) {
    liveMusic[i].style.display = 'block';
    loadMoreButton.style.display = 'none';
  }
}

function loadMoreAlbumReviews() {
  for (var i = 0; i < albumReviews.length; i++) {
    albumReviews[i].style.display = 'block';
    loadMoreButton.style.display = 'none';
  }
}

function loadMorePlayingMusic() {
  for (var i = 0; i < playingMusic.length; i++) {
    playingMusic[i].style.display = 'block';
    loadMoreButton.style.display = 'none';
  }
}

function loadMoreMusicProduction() {
  for (var i = 0; i < musicProduction.length; i++) {
    musicProduction[i].style.display = 'block';
    loadMoreButton.style.display = 'none';
  }
}
*/




// Get elements
var selectList = document.getElementById('category-select');
var allPostItems = document.querySelectorAll('.post-column');
var loadMoreButton = document.getElementById('load-more-container');
var showItemsCount=3;

// Initial Display
showItems('all');

// Event Listener for Select Change
selectList.addEventListener('change', function() {
    var selectedCategory = this.value;
    showItems(selectedCategory);
});


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
</script>
</body>

</html>
