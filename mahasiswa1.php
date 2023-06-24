<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
 
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
 
                <?php if(!empty(session()->getFlashdata('message'))) : ?>
 
                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('message');?>
                </div>
                    
                <?php endif ?>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
						<th class="text-center">NO</th>
                        <th class="text-center">SKS</th>
						<th class="text-center">MATA KULIAH</th>    
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=0+1; foreach($Mahasiswa1 as $key => $data) : ?>
                        <tr>
					    <td><?php echo $no++ ?></td>
                        <td><?php echo $data['sks'] ?></td>
                        <td><?php echo $data['mata_kuliah'] ?></td>
                        </tr>
 
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>