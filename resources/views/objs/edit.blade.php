@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Obj
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($obj, ['route' => ['objs.update', $obj->id], 'method' => 'patch']) !!}

                        @include('objs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection