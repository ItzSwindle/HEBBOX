<?php
namespace App\Controllers\Community;

use App\Models\Permission;
use App\Models\Player;

use Core\Locale;
use Core\View;

class Staff
{
    public function index()
    {
        $ranks = Permission::getRanks();

        foreach ($ranks as $row) {
          
            if(!Permission::exists('website_invisible_staff', $row->id)) {
                $row->users = Player::getDataByRank($row->id);

                if (!empty($row->users) && is_array($row->users)) {
                    foreach ($row->users as $users) {
                        $users->settings = Player::getSettings($users->id);
                    }
                }
            }
        }

        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page'  => 'community_staff',
            'action' => 'staff',
            'data'  => $ranks
        ]);
    }
  
    public function team()
    {
        $ranks = Permission::getTeams();
      
        foreach($ranks as $row) {
            $row->users = Player::getByExtraRank($row->id);
        }
      
        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page'  => 'community_staff',
            'action' => 'team',
            'data'  => $ranks
        ]);
    }
	
	public function coordinators()
    {
        $ranks = Permission::getRanks();

        foreach ($ranks as $row) {
          
            if(!Permission::exists('website_invisible_coordinators', $row->id)) {
                $row->users = Player::getDataByRank($row->id);

                if (!empty($row->users) && is_array($row->users)) {
                    foreach ($row->users as $users) {
                        $users->settings = Player::getSettings($users->id);
                    }
                }
            }
        }

        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page'  => 'community_staff',
            'action' => 'coordinators',
            'data'  => $ranks
        ]);
    }
	
	public function dptsm()
    {
        $ranks = Permission::getRanks();

        foreach ($ranks as $row) {
          
            if(!Permission::exists('website_invisible_dptsm', $row->id)) {
                $row->users = Player::getDataByRank($row->id);

                if (!empty($row->users) && is_array($row->users)) {
                    foreach ($row->users as $users) {
                        $users->settings = Player::getSettings($users->id);
                    }
                }
            }
        }

        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page'  => 'community_staff',
            'action' => 'dptsm',
            'data'  => $ranks
        ]);
    }
	
	public function ibaw()
    {
        $ranks = Permission::getRanks();

        foreach ($ranks as $row) {
          
            if(!Permission::exists('website_invisible_ibaw', $row->id)) {
                $row->users = Player::getDataByRank($row->id);

                if (!empty($row->users) && is_array($row->users)) {
                    foreach ($row->users as $users) {
                        $users->settings = Player::getSettings($users->id);
                    }
                }
            }
        }

        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page'  => 'community_staff',
            'action' => 'ibaw',
            'data'  => $ranks
        ]);
    }
	
	
	public function mk()
    {
        $ranks = Permission::getRanks();

        foreach ($ranks as $row) {
          
            if(!Permission::exists('website_invisible_mk', $row->id)) {
                $row->users = Player::getDataByRank($row->id);

                if (!empty($row->users) && is_array($row->users)) {
                    foreach ($row->users as $users) {
                        $users->settings = Player::getSettings($users->id);
                    }
                }
            }
        }

        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page'  => 'community_staff',
            'action' => 'mk',
            'data'  => $ranks
        ]);
    }
	
	public function gm()
    {
        $ranks = Permission::getRanks();

        foreach ($ranks as $row) {
          
            if(!Permission::exists('website_invisible_gm', $row->id)) {
                $row->users = Player::getDataByRank($row->id);

                if (!empty($row->users) && is_array($row->users)) {
                    foreach ($row->users as $users) {
                        $users->settings = Player::getSettings($users->id);
                    }
                }
            }
        }

        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page'  => 'community_staff',
            'action' => 'gm',
            'data'  => $ranks
        ]);
    }
	
	public function eco()
    {
        $ranks = Permission::getRanks();

        foreach ($ranks as $row) {
          
            if(!Permission::exists('website_invisible_eco', $row->id)) {
                $row->users = Player::getDataByRank($row->id);

                if (!empty($row->users) && is_array($row->users)) {
                    foreach ($row->users as $users) {
                        $users->settings = Player::getSettings($users->id);
                    }
                }
            }
        }

        View::renderTemplate('Community/staff.html', [
            'title' => Locale::get('core/title/community/staff'),
            'page'  => 'community_staff',
            'action' => 'eco',
            'data'  => $ranks
        ]);
    }

}