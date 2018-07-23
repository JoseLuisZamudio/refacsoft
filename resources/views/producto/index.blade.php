@extends('layouts.app')

@section('content')

  <main class="mt-5 pt-4">
    @if (session('notification'))
      <div class="alert alert-success">
        {{session('notification')}}
      </div>

    @endif
    <div class="container dark-grey-text mt-5">
      <a href="{{route('productos.create')}}" class="btn btn-outline-primary waves-effect btn-lg float-right">Agregar</a>

      <!--Table-->
      <table class="table table-hover">

        <!--Table head-->
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Unidad</th>
            <th>Cantidad</th>
            <th>Precio Mayoreo</th>
            <th>Precio Menudeo</th>
            <th>Fecha Ingreso</th>
            <th>Imagen</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
          @foreach ($productos as $producto)
            <tr>
              <th scope="row">{{$producto->id}}</th>
              <td>{{$producto->nombre}}</td>
              <td>{{$producto->u_medida}}</td>
              <td>{{$producto->cantidad}}</td>
              <td>{{$producto->precio_venta_mayoreo}}</td>
              <td>{{$producto->precio_vente_menudeo}}</td>
              <td>{{$producto->fecha_ingreso}}</td>
              <td>
                {{-- <img src="{{asset('images/products')}}/{{$producto->imagen}}" --}}
                <img src="{{$producto->imagen}}"
                class="avatar mx-auto white" alt="User Image" style="width: 100%"></td>
                <td>
                  <a class="btn btn-info btn-sm"
                  href="{{route('productos.edit', $producto->id)}}"><i class="fa fa-edit"></i></a>

                  <a
                  class="btn btn-danger btn-sm"
                  data-catid={{$producto->id}}
                  data-toggle="modal"
                  data-target="#delete" >
                  <i class="fa fa-times"></i>
                </a>

                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-notify modal-danger" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <p class="heading lead">Eliminar</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                      </div>
                      <form method="POST" action="{{route('productos.destroy',$producto->id)}}">
                        {!! csrf_field() !!}
                        {!! method_field('DELETE') !!}
                        <div class="modal-body">
                          <div class="text-center">
                            <i class="fa fa-times fa-4x mb-3 animated rotateIn"></i>
                            <p>¿Estás seguro que quieres eliminar el registro? Esta acción no se puede deshacer.</p>
                            <input type="hidden" name="category_id" id="cat_id" value="">
                          </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                          <button type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">No, cancelar</button>
                          <button type="submit" class="btn btn-danger">Si, eliminar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
      <div class="row">
        {{$productos->links()}}
      </div>
    </div>

  </main>



@endsection
