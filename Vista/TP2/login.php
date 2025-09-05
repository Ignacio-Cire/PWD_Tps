<?php
include_once "../Estructura/cabecera.php";

?>
    
<div class="container position-relative">
    <div class="card p-3 text-bg-secondary mx-auto my-2" style="width: 30rem;">
        <div class="card p-3">
            <div class="m-4 ">
                <form action="accion_login.php" method="post" id="login">
                    <p class="h3 m-4 text-center">Member Login</p>
                    <!-- <span class="input-group-text">@</span> -->
                    <div class="mb-4">
                        <div class=" form-floating">
    
                            <input type="text" name="user" id="user" class="form-control" placeholder="Username">
                            <label for="user">Usuario</label>

                            <div class="invalid-feedback" id="errorUser"></div>

                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-floating">
                            <input type="password" name="password" id="password" class="form-control"  placeholder="Password">
                            <label for="password">Password</label>
                            <div class="invalid-feedback" id="errorPassword"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <input type="submit" value="Login" class="btn btn-success col-12">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="verificar_login.js"></script>

</body>
</html>  