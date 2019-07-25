<?php
// var_dump($model); exit();
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

?>

<div class="modal fade" id="top_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title centered" id="myModalLabel"><strong>Pilih Jenis Top Up</strong></h4>
        </div>
        <div class="modal-body">
          <div class="radio"><td width="200px"><label><input type="radio" name="optradio" checked>BNI</label></td></div>
          <div class="radio"><td width="200px"><label><input type="radio" name="optradio" checked>BCA</label></td></div>
          <div class="radio"><td width="200px"><label><input type="radio" name="optradio" checked>Mandiri</label></td></div> 
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <a href="/pembeli/profile/detail-topup"><button type="button" class="btn btn-primary">Next</button></a>
        </div>
      </div>
    </div>
  </div>


  <!-- modal content here -->
  <!-- Modal -->
  <div class="modal fade" id="list_top_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title centered" id="myModalLabel"><strong>Perhatian !!!</strong></h4>
          </div>
          <div class="modal-body">
            Data anda belum Lengkap!! Lengkapi biodata untuk melakukan Top Up
          </div>
          <div class="modal-footer">
            <a href="profile.html"><button type="button" class="btn btn-primary">Close</button></a>
          </div>
        </div>
      </div>
    </div>

    
	<div class="content">
    <p style="text-align: center; font-size: 3rem;">Profil Pengguna</p>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">User</h3>
      </div>
      <div class="panel-body">
       <div class="panel">
				<div class="panel-body">
					<form class="form-horizontal">
						<div class="login-form">
							<table class="custom-table">
								<tbody>
									<tr class="success">
                    <td><h5> <div class="register">Username</h5></td></div>
                    <td><h5> <div class="register"><?php echo $user->username; ?></h5></td></div>
									</tr>
									<tr>
                    <td><h5> <div class="register">Email</h5></td></div>
                    <td><h5> <div class="register"><?php echo $user->email; ?></h5></td></div>
									</tr>
									<tr>
                    <td><h5> <div class="register">Password</h5></td></div>
										<td><input type="password" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
                    <td><h5> <div class="register">Repassword</h5></td></div>
										<td><input type="password" class="form-control" id="inputEmail3"></td>
									</tr>
									<tr>
								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Biodata</h3>
      </div>
      <div class="panel-body">
        <div class="panel-body">
            <div class="panel">
              <div class="panel-body">
                  <div class="login-form">
                  <div class= "saldo-btn">
                    <!-- Button trigger modal -->
                      <button type="button" class="btn btn-success" name="topUp" id="topUp" value="saldo">
                      Top Up</button>
                      <!-- Button trigger modal -->
                      <a href="/pembeli/profile/list-topup"><button type="button" class="btn btn-success"><!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#list_top_up"> -->
                      List Top Up </button></a>
                  </div>

                      <div class="top-up">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#top_up">Rp. 50.000</button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#top_up">Rp.100.000</button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#top_up">Rp. 150.000</button>
                      </div>
                      <?php if(Yii::$app->session->hasFlash('success')): ?>
                        <div class="alert alert-success alert-dismissable">
                          <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                          <h4><i class="icon fa fa-check"></i></h4>
                          <?= Yii::$app->session->getFlash('success') ?>
                        </div>
                      <?php endif; ?>

                      <?php $form = ActiveForm::begin([
                        'enableClientValidation' => false],
                        ['options' => [
                          'method' => 'post',
                          'enctype' => 'multipart/form-data']]);
                        ?>
                    <table class="custom-table">
                      <tbody>
                        <div class= "form-biodata">
                        <tr>
                          <td><h5> <div class="register">Saldo</h5></td></div>
                          <td><h5> <div class="register">Rp. 10.000.000</h5></td></div>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">Nama Lengkap</h5></td></div>
                          <td>
                          <?= Html::activeTextInput($model, 'nama_lengkap', ['class' => 'form-control']);?>
                          <?= Html::error($model, 'nama_lengkap'); ?>
                          </td>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">No HP</h5></td></div>
                          <td>
                          <?= Html:: activeTextInput($model, 'no_hp', ['class' => 'form-control']);?>
                          <?= Html::error($model, 'no_hp'); ?>
                          </td>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">Lantai</h5></td></div>
                          <td>
                          <?= Html::activeTextInput($model, 'lantai', ['class' => 'form-control']);?>
                          <?= Html::error($model, 'lantai'); ?>
                          </td></div>
                        </tr>
                        <tr>
                          <td><h5> <div class="register">Role</h5></td></div>
                          <td>
                          <?php 
                            if($user->id_group == 1) {
                              echo 'penjual';
                            } elseif ($user->id_group == 2) {
                              echo 'pembeli';
                            } else {
                              echo 'role tidak terdaftar';
                            }
                          ?>
                          
                          </td></div>
                        </tr>
                        <tr>
                          <td></td>
                          <td>
                          <div class="form-group">
                             <?= Html::submitButton('Ubah', ['class' => 'btn btn-success']) ?>
                            <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                          </td>
                        </tr>
                      </div>
                      </tbody>
                    </table>
                    <?php ActiveForm::end(); ?>
                  </div>
              </div>
            </div>
            </div>
      </div>
    </div>
  </div>
    
