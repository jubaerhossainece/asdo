<?php
  $last_page = $users->toArray()['last_page'];
  $cur_page = $users->toArray()['current_page'];

    $pages = array();
    $from = $cur_page - floor($offset/2);

    if($from < 1){
      $from = 1;
    }

    $to = $from + $offset -1;

    if($to > $last_page){
      $to = $last_page;
    }

    while ($from <= $to) {
      array_push($pages, $from);
      $from++;
    }

?>
<div class="row">
    <div class="col-md-6"> Showing from {{$users->toArray()['from']}} to {{$users->toArray()['to']}} of {{$users->toArray()['total']}} </div>
    <div class="col-md-6 paginator">
        <nav aria-label="...">
          <ul class="pagination">
            <li class="page-item @if($cur_page == 1) disabled @endif">
              <a class="page-link" @if($cur_page <= 1) aria-hidden="true" @endif href="{{$users->toArray()['first_page_url']}}">First</a>
            </li>
            <li class="page-item @if($cur_page == 1) disabled @endif">
              <a class="page-link" @if($cur_page <= 1) aria-hidden="true" @endif href="{{$users->toArray()['prev_page_url']}}"><i class="fas fa-chevron-left"></i></a>
            </li>
                
            <?php 
                foreach ($pages as $key => $page) {
            ?>     
              <li class="page-item @if($page == $cur_page) active @endif">
                <a class="page-link " href="{{$users->toArray()['path'].'?page='.$page}}">{{$page}}</a>
              </li>
            <?php    }
             ?>
            
            <li class="page-item @if($cur_page == $last_page) disabled @endif">
              <a class="page-link @if($cur_page == $last_page) aria-hidden="true" @endif" href="{{$users->toArray()['next_page_url']}}"><i class="fas fa-chevron-right"></i></a>
            </li>
            <li class="page-item @if($cur_page == $last_page) disabled @endif">
              <a class="page-link @if($cur_page >= $last_page) aria-hidden="true" @endif" href="{{$users->toArray()['last_page_url']}}">Last</a>
            </li>
          </ul>
        </nav>
    </div>
</div>