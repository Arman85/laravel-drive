<li class="{{ Request::is('objs*') ? 'active' : '' }}">
    <a href="{!! route('objs.index') !!}"><i class="fa fa-edit"></i><span>Сделать папку</span></a>
</li>

<li class="{{ Request::is('galleries*') ? 'active' : '' }}">
    <a href="{!! route('galleries.index') !!}"><i class="fa fa-edit"></i><span>Galleries</span></a>
</li>

