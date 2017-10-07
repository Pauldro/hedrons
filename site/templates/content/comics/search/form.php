<form action="<?= $pages->get('/comics/search/')->url; ?>" method="GET">
    <div class="input-group form-group">
        <div class="input-group-btn search-panel">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> <span class="showfilter">Filter by</span> <span class="caret"></span></button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#articles" selected="selected" class="searchfilter">Articles</a></li>
                <li><a href="#comics" class="searchfilter">Comics</a></li>
            </ul>
        </div>
        <input type="hidden" name="searchtype" value="articles" class="search_param">
        <input type="text" class="form-control" name="q" placeholder="Search term..." value="<?= $input->get->text('q'); ?> ">
        <span class="input-group-btn"> <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button> </span>
    </div>
</form>
