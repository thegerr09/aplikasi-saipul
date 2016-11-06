<p><br></p>
<div class="container">
  <div class="col-md-12">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active">
      	<a href="#bendahara" aria-controls="bendahara" role="tab" data-toggle="tab">Bendahara</a>
      </li>
      <li role="presentation">
      	<a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a>
      </li>
      <li role="presentation">
      	<a href="#funtion" aria-controls="funtion" role="tab" data-toggle="tab">funtion</a>
      </li>
      <li role="presentation">
      	<a href="#pekerjaan" aria-controls="pekerjaan" role="tab" data-toggle="tab">Pekerjaan</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="bendahara">
      	<p><br></p>
      	<div class="form-group">
      	  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah">
      	  	<span class="glyphicon glyphicon-plus"></span> Tambah
      	  </button>
      	</div>

      	<!-- Modal -->
		<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Pengeluaran</h4>
		      </div>
		      <form action="<?= $this->url->get('bendahara/create') ?>" method="POST" data-remote="data-remote">
		        <div class="modal-body">
		          <div class="form-group">
		            <input type="date" name="tanggal" class="form-control" required>
		          </div>
		          <div class="form-group">
		            <textarea class="form-control" name="ket" placeholder="Keterangan pengeluaran ..."></textarea>
		          </div>
		          <div class="form-group">
		            <input type="number" name="besar" class="form-control" placeholder="Besar Uang" required>
		          </div>
		          <div class="form-group">
		            <input type="text" name="user" class="form-control" placeholder="PENERIMA" required>
		          </div>
		          <label class="radio-inline">
				    <input type="radio" name="nota" id="inlineRadio1" value="1"> Ada Nota
				  </label>
				  <label class="radio-inline">
				    <input type="radio" name="nota" id="inlineRadio2" value="0"> Tidak ada Nota
		  	  	  </label>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		          <a href="<?= $this->url->get('') ?>" class="btn btn-info">Reload</a>
		          <button type="submit" class="btn btn-primary">Save changes</button>
		        </div>
		      </form>
		    </div>
		  </div>
		</div>

      	<div class="table-responsive">
      	  <table class="table table-bordered table-hover table-striped">
      	  	<thead>
      	  	  <tr>
      	  	  	<th width="5%">NO</th>
      	  	  	<th width="10%">ACTION</th>
      	  	  	<th width="20%">TANGGAL</th>
      	  	  	<th width="35%">KETERANGAN</th>
      	  	  	<th width="15%">BESAR UANG</th>
      	  	  	<th width="10%">PENERIMA</th>
      	  	  	<th width="5%">NOTA</th>
      	  	  </tr>
      	  	</thead>
      	  	<tbody>
      	  	  <?php $no = 1; ?>
      	  	  <?php foreach ($bendahara as $x) { ?>
      	  	  <tr id="remove<?= $x->id ?>">
      	  	  	<td><?php echo $no++; ?></td>
      	  	  	<td>
      	  	  	  <button type="button" class="btn btn-default btn-xs">
      	  	  	  	<span class="glyphicon glyphicon-download"></span>
      	  	  	  </button> 
      	  	  	  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#edit<?= $x->id ?>">
      	  	  	  	<span class="glyphicon glyphicon-edit"></span>
      	  	  	  </button>
      	  	  	  <!-- Modal -->
					<div class="modal fade" id="edit<?= $x->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Pengeluaran</h4>
					      </div>
					      <form action="<?= $this->url->get('bendahara/update') ?>" method="POST" data-remote="data-remote">
					        <div class="modal-body">
					          <div class="form-group">
					          	<input type="hidden" name="id" value="<?= $x->id ?>">
					            <input type="date" name="tanggal" class="form-control" value="<?= $x->tanggal ?>" required>
					          </div>
					          <div class="form-group">
					            <textarea class="form-control" name="ket" placeholder="Keterangan pengeluaran ..."><?= $x->ket ?></textarea>
					          </div>
					          <div class="form-group">
					            <input type="number" name="besar" class="form-control" value="<?= $x->besar ?>" placeholder="Besar Uang" required>
					          </div>
					          <div class="form-group">
					            <input type="text" name="user" class="form-control" value="<?= $x->user ?>" placeholder="PENERIMA" required>
					          </div>
					          <?php if ($x->nota == 1) { ?>
					          <label class="radio-inline">
							    <input type="radio" name="nota" id="inlineRadio1" checked value="1"> Ada Nota
							  </label>
							  <label class="radio-inline">
							    <input type="radio" name="nota" id="inlineRadio2" value="0"> Tidak ada Nota
					  	  	  </label>
			      	  	  	  <?php } else { ?>
					          <label class="radio-inline">
							    <input type="radio" name="nota" id="inlineRadio1" value="1"> Ada Nota
							  </label>
							  <label class="radio-inline">
							    <input type="radio" name="nota" id="inlineRadio2" checked value="0"> Tidak ada Nota
					  	  	  </label>
			      	  	  	  <?php } ?>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					          <a href="<?= $this->url->get('') ?>" class="btn btn-info">Reload</a>
					          <button type="submit" class="btn btn-primary">Save changes</button>
					        </div>
					      </form>
					    </div>
					  </div>
					</div>
      	  	  	  <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#del<?= $x->id ?>">
      	  	  	  	<span class="glyphicon glyphicon-trash"></span>
      	  	  	  </button> 
      	  	  	  <!-- Modal -->
					<div class="modal fade" id="del<?= $x->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog modal-sm" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					        <h4 class="modal-title" id="myModalLabel">Delete Data <?= $x->id ?> ?</h4>
					      </div>
				          <div class="modal-footer">
				          	<div class="pull-left">
				          	  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				          	</div>
				          	<form action="<?= $this->url->get('bendahara/delete/') ?>" method="GET" data-remote="data-remote">
				          	  <input type="hidden" name="id" value="<?= $x->id ?>">
					          <button type="submit" class="btn btn-danger">Delete</button>
				          	</form>
				          </div>
					    </div>
					  </div>
					</div>
      	  	  	</td>
      	  	  	<td><?= $x->tanggal ?></td>
      	  	  	<td><?= $x->ket ?></td>
      	  	  	<td>Rp. <?php echo number_format($x->besar, 0, '.', '.'); ?>,-</td>
      	  	  	<td><?= $x->user ?></td>
      	  	  	<td>
      	  	  	  <?php if ($x->nota == 1) { ?>
      	  	  	  <span class="glyphicon glyphicon-ok" style="color: green;"></span>
      	  	  	  <?php } else { ?>
      	  	  	  <span class="glyphicon glyphicon-remove" style="color: red;"></span>
      	  	  	  <?php } ?>
      	  	  	</td>
      	  	  </tr>
      	  	  <?php } ?>
      	  	  <tr>
      	  	  <td colspan="4" align="center"><b>TOTAL PENGELUARAN</b></td>
      	  	  <td><b>Rp. <?php echo number_format($total, 0, '.', '.'); ?>,-</b></td>
      	  	  <td colspan="2"><?php echo count($bendahara) ?> Transaksi</td>
      	  	  </tr>
      	  	</tbody>
      	  </table>
      	  <div class="col-md-4">
      	  	<table class="table">
	      	  <tr>
	      	    <td><b>SALDO</b></td>
	      	    <td> = </td>
	      	    <td>Rp. 1.500.000,-</td>
	      	  </tr>
	      	  <tr>
	      	    <td><b>PENGELUARAN</b></td>
	      	    <td> = </td>
	      	    <td>Rp. <?php echo number_format($total, 0, '.', '.'); ?>,-</td>
	      	  </tr>
	      	  <tr>
	      	    <td><b>SISA</b></td>
	      	    <td> = </td>
	      	    <td>Rp. <?php echo number_format(1500000-$total, 0, '.', '.'); ?>,-</td>
	      	  </tr>
	      	</table>
      	  </div>
      	</div>
      </div>
      <div role="tabpanel" class="tab-pane" id="profile">
      	<h1>profile saipul hidayat</h1>
      </div>
      <div role="tabpanel" class="tab-pane" id="funtion">
	    <div class="col-md-3" style="margin-top:10px;">
	      <div class="panel panel-primary">
	        <div class="panel-heading" align="center">
	          LIST FUNCTION
	          <a class="pull-right" href="#">
	          	<i class="glyphicon glyphicon-plus" style="color:#fff;"></i>
	          </a>
	        </div>
	        <div class="panel-body">
	          <div class="input-group">
		        <input type="text" class="form-control" name="search" placeholder="Search for...">
		        <span class="input-group-btn">
		          <button class="btn btn-default" type="submit">
		          	<i class="glyphicon glyphicon-search"></i>
		          </button>
		        </span>
		      </div>
	        </div>
	        <div class="list-group">
			  <a href="#" class="list-group-item">
			    Cras justo odio
			    <span class="pull-right glyphicon glyphicon-chevron-right text-primary"></span>
			  </a>
			  <a href="#" class="list-group-item">
			    Cras justo odio
			    <span class="pull-right glyphicon glyphicon-chevron-right text-primary"></span>
			  </a>
			</div>
			<div class="panel-body">
			  <nav aria-label="Page navigation">
			    <ul class="pagination pagination-sm">
			      <li>
			        <a href="#" aria-label="Previous">
			          <span aria-hidden="true">&laquo;</span>
			        </a>
			      </li>
			      <li><a href="#">1</a></li>
			      <li><a href="#">2</a></li>
			      <li><a href="#">...</a></li>
			      <li><a href="#">49</a></li>
			      <li><a href="#">50</a></li>
			      <li>
			        <a href="#" aria-label="Next">
			          <span aria-hidden="true">&raquo;</span>
			        </a>
			      </li>
			    </ul>
			  </nav>
			</div>
	      </div>
	    </div>
	    <div class="col-md-9" style="margin-top:10px;">
	      <div class="panel panel-primary">
	        <div class="panel-heading" align="center">DISPLAY FUNCTION</div>
	        <div class="panel-body">
	          
	        </div>
	      </div>
	    </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="settings">...</div>
    </div>
  </div>
</div>