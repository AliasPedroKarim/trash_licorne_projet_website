<style>
    *{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}


    /* Full-width input fields */
    input[type=email], input[type=text], input[type=password] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 26px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size:16px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 26px;
        border: none;
        cursor: pointer;
        width: 90%;
        font-size:20px;
    }
    button:hover {
        opacity: 0.8;
    }

    /* Center the image and position the close button */
    .imgcontainer_1 {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
    }
    .avatar_1 {
        width: 200px;
        height:200px;
        border-radius: 50%;
    }

    /* The Modal (background) */
    .modal_1 {
        display:none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0,0,0,0.4);
    }

    /* Modal Content Box */
    .modal-content_1 {
        background-color: #fefefe;
        margin: 4% auto 15% auto;
        border: 1px solid #888;
        width: 40%;
        padding-bottom: 30px;
    }

    /* The Close Button (x) */
    .close_1 {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
    }
    .close_1:hover,.close_1:focus {
        color: red;
        cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate_1 {
        animation: zoom 0.6s
    }
    @keyframes zoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }
</style>

<div id="modal-wrapper_1" class="modal_1" style="color: #000; z-index: 3;">

    <form class="modal-content_1 animate_1" action="deconnexion.php" method="post">

        <div class="imgcontainer_1">
            <span onclick="document.getElementById('modal-wrapper_1').style.display='none'" class="close_1" title="Close PopUp">&times;</span>
            <img src="https://www.shareicon.net/download/2015/09/18/103157_man_512x512.png" alt="Avatar" class="avatar_1">
            <h1 style="text-align:center">Inscription</h1>
        </div>

        <div class="container_1">
            <input type="text" placeholder="Utilisateur" name="pseudo" autofocus required>
            <input type="text" placeholder="Nom" name="Nom" required>
            <input type="text" placeholder="Prenom" name="prenom" required>
            <input type="email" placeholder="exemple : jean.luc@test.fr" name="email" required>
            <input type="password" placeholder="Mot de passe" name="password" required>
            <button type="submit" name="submit">S'inscrire</button>
            <input type="checkbox" style="margin:26px 30px;"> Je lu et j'accepte les <a href="#" style="color: rgb(14, 167, 225)">conditions d'utilisations</a>.
            <div href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top: -10px;">Mot de passe oublier ?</div>
        </div>

    </form>

</div>

<script>
    // If user clicks anywhere outside of the modal, Modal will close

    var modal = document.getElementById('modal-wrapper_1');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>