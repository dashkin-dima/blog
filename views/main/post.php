
<header class="masthead parallax" style="background-image: url('/views/images/<?php 
    if(file_exists("/views/images/".$data['id']."jpg")){
        echo $data['id'];} else {echo "default";} ?>.jpg'); filter: grayscale(0.7);">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h1>
                    <span class="subheading"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?></p>
            <button type="button" onclick="document.location='/'" class="btn btn-secondary">Назад</button>
        </div>
    </div>
</div>
