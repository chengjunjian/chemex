<?php

namespace App\Admin\Controllers;

use Adldap\Auth\BindException;
use Adldap\Auth\PasswordRequiredException;
use Adldap\Auth\UsernameRequiredException;
use App\Admin\Forms\ConfigurationLDAPForm;
use App\Http\Controllers\Controller;
use App\Support\LDAP;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Widgets\Tab;

class ConfigurationLDAPController extends Controller
{
    /**
     * 页面
     * @param Content $content
     * @return Content
     */
    public function index(Content $content): Content
    {
        return $content
            ->title($this->title())
            ->description(admin_trans_label('description'))
            ->body(function (Row $row) {
                $tab = new Tab();
                $tab->addLink(admin_trans_label('platform'), admin_route('configurations.platform.index'));
                $tab->addLink(admin_trans_label('extensions'), admin_route('configurations.extensions.index'));
                $tab->add(admin_trans_label('ldap'), new Card(new ConfigurationLDAPForm()), true);
                $row->column(12, $tab);
            });
    }

    public function title()
    {
        return admin_trans_label('title');
    }

    /**
     * AD登录验证
     * @return bool|string
     */
    public function test()
    {
        try {
            if (!admin_setting('ad_enabled')) {
                return -3;
            }
            return LDAP::auth();
        } catch (BindException $e) {
            return $e->getMessage();
        } catch (PasswordRequiredException $e) {
            return -1;
        } catch (UsernameRequiredException $e) {
            return -2;
        }
    }
}
