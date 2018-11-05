<?php
/*
UserSpice 4
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*
%m1% - Dymamic markers which are replaced at run time by the relevant index.
*/

$lang = array();

// Signup
$lang = array_merge($lang,array(
	"SIGNUP_TEXT"			=> "Registrar",
	"SIGNUP_BUTTONTEXT"		=> "Registrar",
	"SIGNUP_AUDITTEXT"		=> "Registrado",
	));

// Signin
$lang = array_merge($lang,array(
	"SIGNIN_FAIL"			=> "** PROBLEMA AO LOGAR **",
	"SIGNIN_TITLE"			=> "Bem vindo!",
	"SIGNIN_TEXT"			=> "Logar",
	"SIGNOUT_TEXT"			=> "Deslogar",
	"SIGNIN_BUTTONTEXT"		=> "Logar",
	"SIGNIN_AUDITTEXT"		=> "Logado",
	"SIGNOUT_AUDITTEXT"		=> "Deslogado",
	));

//Navigation
$lang = array_merge($lang,array(
	"NAVTOP_HELPTEXT"		=> "Ajuda",
	));

//Account
$lang = array_merge($lang,array(
	"ACCOUNT_USER_ADDED" 		=> "Novo usuário adicionado!",
	"ACCOUNT_SPECIFY_USERNAME" 		=> "Digite seu usuário",
	"ACCOUNT_SPECIFY_PASSWORD" 		=> "Digite sua senha",
	"ACCOUNT_SPECIFY_EMAIL"			=> "Digite seu e-mail",
	"ACCOUNT_INVALID_EMAIL"			=> "E-mail inválido",
	"ACCOUNT_USER_OR_EMAIL_INVALID"		=> "Usuário ou e-mail inválidos",
	"ACCOUNT_USER_OR_PASS_INVALID"		=> "Usuário ou senha inválidos",
	"ACCOUNT_USER_OR_PASS_INVALID2"		=> "We have upgraded our technology to better protect your account.<a href='forgot-password.php'> Please click here to update your password to our new system.</a> We are sorry for the inconvenience.",
	"ACCOUNT_ALREADY_ACTIVE"		=> "Sua conta já foi ativada",
	"ACCOUNT_INACTIVE"			=> "Sua conta está em ativação. Verifique sua caixa de entrada de e-mail ou spam, e siga as instruções para ativar a sua conta",
	"ACCOUNT_USER_CHAR_LIMIT"		=> "Seu usuário precisa ter entre %m1% e %m2% caracteres",
	"ACCOUNT_DISPLAY_CHAR_LIMIT"		=> "Seu nome de exibição deve ter entre %m1% e %m2% caracteres",
	"ACCOUNT_PASS_CHAR_LIMIT"		=> "Sua senha deve ter entre %m1% e %m2% caracteres",
	"ACCOUNT_TITLE_CHAR_LIMIT"		=> "Titles must be between %m1% and %m2% characters in length",
	"ACCOUNT_PASS_MISMATCH"			=> "Favor digite a mesma senha em ambos os campos",
	"ACCOUNT_DISPLAY_INVALID_CHARACTERS"	=> "Seu nome só pode conter caracteres",
	"ACCOUNT_USERNAME_IN_USE"		=> "Usuário %m1% já está em uso",
	"ACCOUNT_DISPLAYNAME_IN_USE"		=> "Nome %m1% já está em uso",
	"ACCOUNT_EMAIL_IN_USE"			=> "O e-mail %m1% já está em uso",
	"ACCOUNT_LINK_ALREADY_SENT"		=> "An activation email has already been sent to this email address in the last %m1% hour(s)",
	"ACCOUNT_NEW_ACTIVATION_SENT"		=> "Nós enviamos um e-mail de confirmação. Favor acesse o seu e-mail e siga as intruções para ativar a sua conta.",
	"ACCOUNT_SPECIFY_NEW_PASSWORD"		=> "Digite sua nova senha",
	"ACCOUNT_SPECIFY_CONFIRM_PASSWORD"	=> "Confirme sua nova senha",
	"ACCOUNT_NEW_PASSWORD_LENGTH"		=> "Nova senha deve ter entre %m1% e %m2% characteres",
	"ACCOUNT_PASSWORD_INVALID"		=> "Senha incorreta",
	"ACCOUNT_DETAILS_UPDATED"		=> "Detalhes da conta atualizados",
	"ACCOUNT_ACTIVATION_MESSAGE"		=> "Você precisa ativar a sua conta antes de logar a primeira vez. Por favor clique no link abaixo para ativar a sua conta. \n\n
	%m1%activate-account.php?token=%m2%",
	"ACCOUNT_ACTIVATION_COMPLETE"		=> "Você ativou a sua conto com sucesso. Agora pode logar no nosso site <a href=\"login.php\">clicando aqui</a>.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE1"	=> "Registro efetuado com sucesso. Você agora pode logar href=\"login.php\">clicando aqui</a>.",
	"ACCOUNT_REGISTRATION_COMPLETE_TYPE2"	=> "Registro efetuado com sucesso. Em breve você receberá um e-mail de confirmação.",
	"ACCOUNT_PASSWORD_NOTHING_TO_UPDATE"	=> "Digite uma senha diferente da anterior",
	"ACCOUNT_PASSWORD_UPDATED"		=> "Senha da conta atualizada",
	"ACCOUNT_EMAIL_UPDATED"			=> "E-mail da conta atualizado",
	"ACCOUNT_TOKEN_NOT_FOUND"		=> "Token não existe / Conta já ativada",
	"ACCOUNT_USER_INVALID_CHARACTERS"	=> "Nome de usuário deve conter apenas caracteres alpha-numéricos",
	"ACCOUNT_DELETIONS_SUCCESSFUL"		=> "Você excluiu %m1% usuário(s)",
	"ACCOUNT_MANUALLY_ACTIVATED"		=> "A conte de %m1% foi ativada manualmente",
	"ACCOUNT_DISPLAYNAME_UPDATED"		=> "Nome de exibição alterado para %m1%",
	"ACCOUNT_TITLE_UPDATED"			=> "O titulo de %m1% foi alterado para %m2%",
	"ACCOUNT_PERMISSION_ADDED"		=> "Acesso dado a %m1% níveis de permissão",
	"ACCOUNT_PERMISSION_REMOVED"		=> "Removed access from %m1% permission levels",
	"ACCOUNT_INVALID_USERNAME"		=> "Usu[ario inválido",
	"CAPTCHA_ERROR"		=> "Digite o texto corretamente, Robo!",
	"USER_PROTECTION"		=> "Usuário %m1% protegido",
	"USER_DEV_OPTION"		=> "Usuário %m1% [e um developer]",
	));

//Configuration
$lang = array_merge($lang,array(
	"CONFIG_NAME_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_URL_CHAR_LIMIT"			=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_EMAIL_CHAR_LIMIT"		=> "Site name must be between %m1% and %m2% characters in length",
	"CONFIG_ACTIVATION_TRUE_FALSE"		=> "Email activation must be either `true` or `false`",
	"CONFIG_ACTIVATION_RESEND_RANGE"	=> "Activation Threshold must be between %m1% and %m2% hours",
	"CONFIG_LANGUAGE_CHAR_LIMIT"		=> "Language path must be between %m1% and %m2% characters in length",
	"CONFIG_LANGUAGE_INVALID"		=> "There is no file for the language key `%m1%`",
	"CONFIG_TEMPLATE_CHAR_LIMIT"		=> "Template path must be between %m1% and %m2% characters in length",
	"CONFIG_TEMPLATE_INVALID"		=> "There is no file for the template key `%m1%`",
	"CONFIG_EMAIL_INVALID"			=> "The email you have entered is not valid",
	"CONFIG_INVALID_URL_END"		=> "Please include the ending / in your site's URL",
	"CONFIG_UPDATE_SUCCESSFUL"		=> "Configuração do site atualizada. Recarregue a página para aplicar as novas configurações",
	));

//Forgot Password
$lang = array_merge($lang,array(
	"FORGOTPASS_INVALID_TOKEN"		=> "Seu token de ativação não é valido",
	"FORGOTPASS_NEW_PASS_EMAIL"		=> "Uma nova senha foi enviada por e-mail",
	"FORGOTPASS_REQUEST_CANNED"		=> "Solicitação de senha cancelada",
	"FORGOTPASS_REQUEST_EXISTS"		=> "Já existe um pedido de reset de senha para esta conta",
	"FORGOTPASS_REQUEST_SUCCESS"		=> "Foi enviado um e-mail com instruções para resetar a sua senha",
	));

//Mail
$lang = array_merge($lang,array(
	"MAIL_ERROR"				=> "Fatal error attempting mail, contact your server administrator",
	"MAIL_TEMPLATE_BUILD_ERROR"		=> "Error building email template",
	"MAIL_TEMPLATE_DIRECTORY_ERROR"		=> "Unable to open mail-templates directory. Perhaps try setting the mail directory to %m1%",
	"MAIL_TEMPLATE_FILE_EMPTY"		=> "Template file is empty... nothing to send",
	));

//Miscellaneous
$lang = array_merge($lang,array(
	"CAPTCHA_FAIL"				=> "Tente novamente",
	"CONFIRM"				=> "Confirma",
	"DENY"					=> "Negado",
	"SUCCESS"				=> "Sucesso",
	"ERROR"					=> "Erro",
	"NOTHING_TO_UPDATE"			=> "Nada para atualizar",
	"SQL_ERROR"				=> "Fatal SQL error",
	"FEATURE_DISABLED"			=> "This feature is currently disabled",
	"PAGE_PRIVATE_TOGGLED"			=> "Esta página agora é %m1%",
	"PAGE_ACCESS_REMOVED"			=> "Permissão removida para %m1% nivel(is) de acesso",
	"PAGE_ACCESS_ADDED"			=> "Permissão concedida para %m1% nivel(is) de acesso",
	"PAGE_REAUTH_TOGGLED"			=>  "Esta página %m1% verificação",
	"PAGE_RETITLED"			=>  "Esta página foi renomeada para '%m1%'",
	));


	$lang = array_merge($lang,array(
	    "MESSAGE_ARCHIVE_SUCCESSFUL"        => "You have successfully archived %m1% threads",
	    "MESSAGE_UNARCHIVE_SUCCESSFUL"      => "You have successfully unarchived %m1% threads",
	    "MESSAGE_DELETE_SUCCESSFUL"         => "You have successfully deleted %m1% threads",
			"USER_MESSAGE_EXEMPT"         			=> "User is %m1% exempted from messages.",
	    ));

//Permissions
$lang = array_merge($lang,array(
	"PERMISSION_CHAR_LIMIT"			=> "Permission names must be between %m1% and %m2% characters in length",
	"PERMISSION_NAME_IN_USE"		=> "Permission name %m1% is already in use",
	"PERMISSION_DELETIONS_SUCCESSFUL"	=> "Successfully deleted %m1% permission level(s)",
	"PERMISSION_CREATION_SUCCESSFUL"	=> "Successfully created the permission level `%m1%`",
	"PERMISSION_NAME_UPDATE"		=> "Permission level name changed to `%m1%`",
	"PERMISSION_REMOVE_PAGES"		=> "Successfully removed access to %m1% page(s)",
	"PERMISSION_ADD_PAGES"			=> "Successfully added access to %m1% page(s)",
	"PERMISSION_REMOVE_USERS"		=> "Successfully removed %m1% user(s)",
	"PERMISSION_ADD_USERS"			=> "Successfully added %m1% user(s)",
	"CANNOT_DELETE_NEWUSERS"		=> "You cannot delete the default 'new user' group",
	"CANNOT_DELETE_ADMIN"			=> "You cannot delete the default 'admin' group",
	));

	//Admin Page
	$lang = array_merge($lang,array(
		"PERMISSION_CHAR_LIMIT"			=> "Permission names must be between %m1% and %m2% characters in length",

		));



?>
