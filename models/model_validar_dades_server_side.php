<?php

    function validar_dades_server_side(&$errors_registre): int
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') // VALIDACIÓ ADDICIONAL
        {
            $status = 1;

            // DADES DEL FORMULARI
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');
            $address = trim($_POST['address'] ?? '');
            $population = trim($_POST['population'] ?? '');
            $postal = trim($_POST['postal'] ?? '');

            if (empty($name) || !preg_match("/^(?!\s)[A-Za-zÀ-ÿ\s\-']+$/", $name))
            {
                $errors_registre['name'] = "El nom només pot contenir lletres, espais, guions i apòstrofs. No pot ser espai ni pot ser buit.";
                $status = -2;
            }
                
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors_registre['email'] = "L'adreça electrònica no és vàlida.";
                $status = -2;
            }
                
            if (empty($password) || !preg_match("/^[A-Za-z0-9]+$/", $password))
            {
                $errors_registre['password'] = "La contrasenya ha de ser alfanumèrica i no pot tenir caràcters especials. No pot ser buida.";
                $status = -2;
            }

            if (empty($address) || !preg_match("/^(?!\s)[A-Za-zÀ-ÿ0-9\s\.,'-\\\\]{1,30}$/", $address))
            {
                $errors_registre['address'] = "L'adreça només pot contenir lletres, números, espais, punts, comes, barres invertides i guions (màxim 30 caràcters). No pot ser espai ni ser buit.";
                $status = -2;
            }

            if (empty($population) || !preg_match("/^(?!\s)[A-Za-zÀ-ÿ\s\-']{1,30}$/", $population))
            {
                $errors_registre['population'] = "La població només pot contenir lletres, espais, guions i apòstrofs (màxim 30 caràcters). No pot ser espai ni ser buit.";
                $status = -2;
            }

            if (empty($postal) || !preg_match("/^\d{5}$/", $postal))
            {
                $errors_registre['postal'] = "El codi postal ha de contenir exactament 5 números. No pot ser buit.";
                $status = -2;
            }

            // SI HI HA ERRORS, RETORNEM ELS MISSATGES A L'USUARI
            return $status;
        }

        return -3; // ERROR EXTRAORDINARI (NO HAURIA D'ARRIBAR A AQUESTA LÍNIA)
    }

?>