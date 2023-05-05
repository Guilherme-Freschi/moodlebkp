<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_oidc', language 'pt_br', version '4.1'.
 *
 * @package     auth_oidc
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_updated'] = 'A configuração do OpenID Connect foi atualizada.';
$string['application_updated_azure'] = 'A configuração do OpenID Connect foi atualizada.<br/>
<span class="warning" style="color: red;"> O administrador do Azure precisará <b>Fornecer as permissões de administrador</b> e <b>Verificar as configurações</b> novamente se o "Tipo de provedor de identidade (IdP)" ou o "Método de autenticação do cliente" estão com as configurações atualizadas na <a href="{$a}" target="_blank">Página de configuração de integração do Microsoft 365</a> .</span>';
$string['auth_method_certificate'] = 'Certificado';
$string['auth_method_secret'] = 'Segredo';
$string['auth_oidcdescription'] = 'O plugin de autenticação OpenID Connect fornece funcionalidade de login único usando Idp configurável.';
$string['authendpoint'] = 'Endpoint de autorização';
$string['authendpoint_help'] = 'O URI do endpoint de autorização do seu Idp que vai ser usado.<br>
Note que, o site deve ser configurado para permitir o acesso de usuários de outros clientes, o endpoint de autorização específico do cliente não pode ser utilizado.';
$string['authentication_and_endpoints_saved'] = 'Configurações de autenticação e endpoists atualizadas';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Link para configurações de Idp e autenticação</a>';
$string['cfg_autoappend_desc'] = 'Anexe uma string automaticamente para que ao fazer login o usuário utilize somente o método de autenticação "Credenciais e senha do usuário". Isso é útil quando seu idP requer um domínio comum, com isso os usuários precisam informar somente o usuário. Por exemplo, se o usuário no OpenID Connect for "jose.maria@exemplo.com" e for colocado como domínio "@exemplo.com", o usuário pode digitar somente "jose.maria" para realizar o login.<br /><b>Nota:</b> Caso existam nomes de usuário conflitantes - ou seja, dois usuário do Moodle com o mesmo nome, a prioridade do plugin de autenticação é usada para determinar a prioridade do usuário.';
$string['cfg_autoappend_key'] = 'Anexar automaticamente';
$string['cfg_customicon_key'] = 'Ícone personalizado';
$string['cfg_debugmode_desc'] = 'Se habilitado, informações que podem ajudar na identificação de problemas serão registradas no log do Moodle.';
$string['cfg_err_invalidclientid'] = 'ID do cliente inválido';
$string['cfg_err_invalidclientsecret'] = 'Senha do cliente inválida';
