@extends('layouts.app')
@section('styles')
    <style>
        #map{
            width: 500px;
            height: 250px;
        }
    </style>
@endsection

@section('content')
<div id="usuario">
<table class="table table-hover table-striped">
			<thead>
				<tr>

					<th>nombre</th>
					<th colspan="2">
						&nbsp;
					</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="usuario in usuarios">

				<td v-text="usuario.name"></td>
					<td width="10px">
          <button @click="verFinca(usuario)">ver finca</button>
				<!--		<a href="{{ url('page') }}" class="btn btn-warning btn-sm" >ver finca</a>-->
					</td>

				</tr>
			</tbody>
		</table>




    </div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Agregar finca
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="finca">
                <div class="modal-body">

                    <form @submit.prevent="agregarFinca()">

                        <div class="mb-3">
                            <label for="" class="form-label">nombre</label>
                            <input  type="text" class="form-control" tabindex="1" v-model="finca.nombre">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Municipio</label>
                            <input type="text" class="form-control" tabindex="2" v-model="finca.municipio">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Departamento</label>
                            <input  type="text" class="form-control" tabindex="2" v-model="finca.departamento">
                        </div>


                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                    </form>

                </div>
            </div>
<div id="map"></div>
        </div>
    </div>
</div>

@endsection





@section('Scripts')

<script src="{{ asset('js/usuario.js') }}"    defer></script>
<script src="{{ asset('js/finca.js') }}"    defer></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZTrnuoWZkmS8ZxoxJM-_AELDVJrPcGyE&callback=initMap&libraries=&v=weekly"
    defer
></script>
<script>
    function initMap() {
        let map;
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: {lat: -34.397, lng: 150.644},
        });
    }
</script>

@endsection
