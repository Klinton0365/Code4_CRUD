<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <div class="container">
    <div class="row">
        <div class="col s12 m12">
        <div class="card-panel">
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Blog <a class="right waves-effect waves-light btn modal-trigger" href="#modal1">Create Blog</a>
                <!-- Modal Structure -->
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <h4>Create Post</h4>
                                        <div class="input-field col s12">
                                            <input id="first_name2" type="text" class="validate">
                                            <label class="active" for="first_name2" >Title</label>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea2" class="materialize-textarea" data-length="120" name="description"></textarea>
                                        <label for="textarea2">Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button type="submit" class="btn">Create Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <!-- <div class="modal-footer">
                <a href="#!" class="modal-close waves-effect waves-green btn">Create</a>
                </div> -->
                </div>            
            </span>
         <table>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <?php $c=1 ?>
<?php foreach($blogs as $code_red): ?>
            <tr>
                <td><?php echo $c++; ?></td>
                <td><?php echo $code_red['title']; ?></td>
                <td><?php echo $code_red['description']; ?></td>
                <td>
                    <button data-target="viewModel" class="btn blue modal-trigger">View</button>
                        <div id="viewModel" class="modal">
                            <div class="modal-content">
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <h4>View Post</h4>
                                            <div class="input-field col s12">
                                                <input id="first_name2" type="text" value="<?php echo $blog['title']; ?>" readonly>
                                                <label class="active" for="first_name2" >Title</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea2" class="materialize-textarea" data-length="120" name="description" readonly><?php echo $blog['description']; ?></textarea>
                                                <label for="textarea2">Description</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <button type="submit" class="btn">Post</button>
                                            </div>
                                        </div>                          
                                    </form>
                                </div>
                            </div>
                        </div>            

                    <button class="btn green modal-trigger" data-target="editModel">Edit</button>
                        <div id="editModel" class="modal">
                                <div class="modal-content">
                                    <div class="row">
                                        <form class="col s12">
                                            <div class="row">
                                                <h4>Edit Post</h4>
                                                <div class="input-field col s12">
                                                    <input id="first_name2" type="text" >
                                                    <label class="active" for="first_name2" >Title</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea id="textarea2" class="materialize-textarea" data-length="120" name="description" ></textarea>
                                                    <label for="textarea2">Description</label>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col s12">
                                                    <button type="submit" class="btn">Update Post</button>
                                                </div>
                                            </div>                         
                                        </form>
                                    </div>
                                </div>
                        </div>          
                    <button class="btn red modal-trigger" data-target="deleteModel">Delete</button>
                        <div id="deleteModel" class="modal">
                                <div class="modal-content">
                                    <div class="row">
                                        <form class="col s12">
                                            <div class="row">
                                                <h4>Delete Post</h4>
                                                <div class="row">
                                                    <div class="col s12">
                                                        Are you Sure to Delete?
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col s12">
                                                    <button type="submit" class="btn">Delete Post</button>
                                                </div>
                                            </div>                         
                                        </form>
                                    </div>
                                </div>
                        </div>
                </td>
            </tr>
<?php endforeach; ?>
         </table>
        </div>
        </div>
        </div>
    </div>
    </div>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

      <!--JavaScript at end of body for optimized loading-->
      <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

      <script>
        $(document).ready(function(){
            $('.modal').modal();
        });
      </script>
    </body>
  </html>