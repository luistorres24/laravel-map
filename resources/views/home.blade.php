@extends('layouts.app')
@section('styles')
<style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 50%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: "Roboto", "sans-serif";
        line-height: 30px;
        padding-left: 10px;
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
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
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 
   

    </div>

@endsection
    
        
   
    

@section('Scripts')

<script src="{{ asset('js/usuario.js') }}"></script>


@endsection