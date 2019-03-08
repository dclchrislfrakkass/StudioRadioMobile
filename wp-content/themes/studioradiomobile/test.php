
<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Voir si un utilisateur est connecté -->
<?php
$current_user = wp_get_current_user();
if (0 == $current_user->ID){
    // pas connecté
} else {
    // connecté
}
?>
<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Voir si un utilisateur est connecté ma méthode -->
<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
    // pas connecté
} else {
    //connnecté
}
?>

<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
si un utilisateur est connecté afficher le bouton de déconnexion -->

<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
echo do_shortcode('[wpmem_form login]');
} else {
echo "<br/>";
echo "<button type='button' class='btn btn-warning'>Déconnexion</button>";
}
?>

<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
récupère le status pour l'afficher dans le bouton accès  -->
<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
echo do_shortcode('[wpmem_form register]');
} else {
echo 'Bonjour' . $current_user->user_login."\n";
echo 'Votre contenu se trouve ici.';
}
?>


<div data-id="0133545" class="elementor-element elementor-element-0133545 elementor-widget elementor-widget-button" data-element_type="button.default">
        <div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
    <a href="http://studioradiomobile.test/professeur" class="elementor-button-link elementor-button elementor-size-sm" role="button">
                <span class="elementor-button-content-wrapper">
                <span class="elementor-button-text">Accès <?php echo $user_status;?></span>
         
</span>
            </a>
</div>
</div>
</DIV>




<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

récupère le status eleve ou professseur du membre--->
<?php
$current_user = wp_get_current_user();
$user_id= $current_user->ID;
$key = 'statusUser';
$single = true;
$user_status = get_user_meta( $user_id, $key, $single ); 
?>
                <span class="elementor-button-text">Accès <?php echo $user_status;?></span>


<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

 se déconnecter et rester sur la même page -->
<a href="<?php echo wp_logout_url( get_permalink() ); ?>">Déconnexion</a>


<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
vérification du login, du status de l'utilisateur et définition du lien en fonction du status-->

<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
echo do_shortcode('[wpmem_form register]');
} else {
echo "Bonjour " . $current_user->user_login ."<br/>";
echo "Votre contenu se trouve ici.";
echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
echo "<div class='elementor-widget-container'>";
echo "<div class='elementor-button-wrapper'>";
if ($user_status == 'Elève') {
    echo "<a href='http://studioradiomobile.test/eleve' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
    }else{
    echo "<a href='http://studioradiomobile.test/professeur' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
    }
echo "<span class='elementor-button-content-wrapper'>";

$current_user = wp_get_current_user();
$user_id= $current_user->ID;
$key = 'statusUser';
$single = true;
$user_status = get_user_meta( $user_id, $key, $single ); 
?>
                <span class="elementor-button-text">Accès <?php echo $user_status;?></span>
         
</span>
            </a>
</div>
</div>
<?php var_dump($user_status);?>
</div>
<?php
}
?>

<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
le code pour la page d'accès et la comparaison de status //CODE UTILISE //
-->
<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
    echo do_shortcode('[wpmem_form register]');
} else {
    global $current_user;
    get_currentuserinfo();
    $user_id= $current_user->ID;
    $key = 'statusUser';
    $single = true;
    $user_status = get_user_meta( $user_id, $key, $single );

    // echo 'Bonjour ' . $current_user->user_login.'<br/>';
    // echo 'Votre contenu se trouve ici.';
    echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
    echo "<div class='elementor-widget-container'>";
    echo "<div class='elementor-button-wrapper'>";
if ($user_status === '1') {
    echo "Votre compte est un compte Elève,<br/>voici votre accès.<br/>";
    echo "<a href='http://studioradiomobile.test/eleve' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
    $titreStatus = 'Elève';
}else{
    echo "Votre compte est un compte Professeur,<br/>voici votre accès.<br/>";
    echo "Vous avez également la possibilité d'accèder à la partie proviseur pour plus d'informations.<br/>";

  

    echo "<a href='http://studioradiomobile.test/proviseur' class='elementor-button-link elementor-button elementor-size-sm' role='button'><span class='elementor-button-text'>Accès Proviseur</span>";
    echo "</span>";
    echo "</a>";

    echo "<span class='elementor-button-content-wrapper ml-3'>";
    echo "<a href='http://studioradiomobile.test/professeur' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
    $titreStatus = 'Professeur';
}

echo "<span class='elementor-button-content-wrapper'>";
?>
<span class="elementor-button-text">Accès <?php echo $titreStatus; ?></span>
</span>
</a>
</div>
</div>
</div>
<a class="btn btn-warning" href="<?php echo wp_logout_url(get_permalink()); ?>">Déconnexion</a>
<?php
}
?>

<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Accès automatique à la page selon le status // pas utilisé //
-->

<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
echo do_shortcode('[wpmem_form register]');
} else {
global $current_user;
get_currentuserinfo();
$user_id= $current_user->ID;
$key = 'statusUser';
$single = true;
$user_status = get_user_meta( $user_id, $key, $single );

//echo 'Bonjour ' . $current_user->user_login.'<br/>';
//echo 'Votre contenu se trouve ici.';
echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
echo "<div class='elementor-widget-container'>";
echo "<div class='elementor-button-wrapper'>";
if ($user_status === '1') {
    $url = 'http://studioradiomobile.test/eleve';
    wp_redirect( $url );
    exit;
}else{
    $url = 'http://studioradiomobile.test/professeur';
    wp_redirect( $url );
    exit;
}



}
?>









//////////////////////////////


<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
echo do_shortcode('[wpmem_form register]');
} else {
global $current_user;
get_currentuserinfo();
$user_id= $current_user->ID;
$key = 'statusUser';
$single = true;
$user_status = get_user_meta( $user_id, $key, $single );

//echo 'Bonjour ' . $current_user->user_login.'<br/>';
//echo 'Votre contenu se trouve ici.';
echo "<div data-id='0133545' class='elementor-element elementor-element-0133545 elementor-widget elementor-widget-button' data-element_type='button.default'>";
echo "<div class='elementor-widget-container'>";
echo "<div class='elementor-button-wrapper'>";
if ($user_status === '1') {
echo "<a href='http://studioradiomobile.test/eleve' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
$titreStatus = 'Elève';
}else{
echo "<a href='http://studioradiomobile.test/professeur' class='elementor-button-link elementor-button elementor-size-sm' role='button'>";
$titreStatus = 'Professeur';
}


echo "<span class='elementor-button-content-wrapper'>";

?>



                <span class="elementor-button-text">Accès <?php echo $titreStatus; ?></span>
         
</span>
            </a>
</div>
</div>
</div>
<a class="btn btn-warning" href="<?php echo wp_logout_url(get_permalink()); ?>">Déconnexion</a>
<?php
}
?>



<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Code simplifié de connexion/deconnexion 
-->




<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
    echo "<div class='row'>";
    echo do_shortcode('[wpmem_form register]');
    echo do_shortcode('[wpmem_form login]');
    echo "</div>";
} else {
    ?>
    <a class="btn btn-warning mx-auto" href="<?php echo wp_logout_url(get_permalink()); ?>">Déconnexion</a>
    <?php
    }
    ?>


<!--
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
acces eleve
-->


<?php
global $current_user;
    get_currentuserinfo();
if (!is_user_logged_in()) {
    $url = 'http://studioradiomobile.test/eleve';
    wp_redirect( $url );
    exit;
    
} else {
    echo "<div class='row'>";
    echo do_shortcode('[wpmem_form register]');
    echo do_shortcode('[wpmem_form login]');
    echo "</div>";
}
