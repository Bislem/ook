    <?php $index = 1 ;?>
    <ul>
        <?php if(!isset($_GET['page'])) $_GET['page'] = '1'; ?>
        @foreach ($elements[0] as $item)
            <li><a class="dancing <?php if($_GET['page'] === ''.$index) echo 'active-p'?>" style="font-size: 20px" href="{{$item}}">{{$index}}</a></li>
            <?php $index++?>
        @endforeach
    </ul>