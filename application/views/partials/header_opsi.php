<?php 
    $module = $this->M_menu_sidebar->getMenu(); 
    $users     = $this->session->userdata('akun_id');
    $sipandai = NULL;
    $sipandai  = $this->M_menu_sidebar->getUsers($users); 
    $profil=$this->session->userdata('profile');
    if (isset($profil)) {
        $profil=$this->session->userdata('profile');
    }else{
        $profil['jenis_civitas'] = 'Karyawan';

    }

    $id_admin           = $this->session->userdata('id_admin');
    $periode_registrasi         = $this->M_admin->getOrmawaRegistrasiPeriode();
    $tgl_daftar_ulang           = $this->M_admin->getOrmawaDaftarUlang($id_admin);
    $ormawatipe                 = $this->M_admin->getOrmawaTipe($id_admin);
    // echo '<pre>';
    // var_dump($module);
    // echo '</pre>';
?>
 

   <nav class="bg-primary-600 border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse bg-transparent">
                <img src="<?php echo base_url()?>assets/new_shidqi/assets/LogoText.svg" class="" alt="Flowbite Logo" />
                <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <!-- <div class="">
                    <img src="<?php echo base_url()?>assets/new_shidqi/assets/Notification.svg" alt="" srcset="">
                </div> -->
                <button type="button"
                    class="flex text-sm  rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="<?php echo base_url()?>assets/new_shidqi/assets/Profile_Menu.svg" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <div class="flex items-center justify-center">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                                    fill="none">
                                    <path
                                        d="M20 3.75C16.7861 3.75 13.6443 4.70305 10.972 6.48862C8.29969 8.27419 6.21689 10.8121 4.98696 13.7814C3.75704 16.7507 3.43524 20.018 4.06225 23.1702C4.68926 26.3224 6.23692 29.2179 8.50952 31.4905C10.7821 33.7631 13.6776 35.3107 16.8298 35.9378C19.982 36.5648 23.2493 36.243 26.2186 35.013C29.1879 33.7831 31.7258 31.7003 33.5114 29.028C35.297 26.3557 36.25 23.2139 36.25 20C36.2455 15.6916 34.5319 11.561 31.4855 8.51454C28.439 5.46806 24.3084 3.75455 20 3.75ZM11.575 30.8594C12.4793 29.4451 13.725 28.2813 15.1974 27.4751C16.6698 26.6689 18.3214 26.2463 20 26.2463C21.6786 26.2463 23.3303 26.6689 24.8026 27.4751C26.275 28.2813 27.5207 29.4451 28.425 30.8594C26.0162 32.7328 23.0516 33.7499 20 33.7499C16.9484 33.7499 13.9839 32.7328 11.575 30.8594ZM15 18.75C15 17.7611 15.2933 16.7944 15.8427 15.9721C16.3921 15.1499 17.173 14.509 18.0866 14.1306C19.0002 13.7522 20.0056 13.6531 20.9755 13.8461C21.9454 14.039 22.8363 14.5152 23.5355 15.2145C24.2348 15.9137 24.711 16.8046 24.9039 17.7745C25.0969 18.7445 24.9978 19.7498 24.6194 20.6634C24.241 21.577 23.6001 22.3579 22.7779 22.9073C21.9556 23.4568 20.9889 23.75 20 23.75C18.6739 23.75 17.4022 23.2232 16.4645 22.2855C15.5268 21.3479 15 20.0761 15 18.75ZM30.275 29.1266C28.8809 27.1064 26.9206 25.5435 24.6406 24.6344C25.8653 23.6698 26.759 22.3475 27.1974 20.8514C27.6358 19.3553 27.597 17.7598 27.0866 16.2868C26.5761 14.8137 25.6194 13.5364 24.3493 12.6323C23.0792 11.7283 21.559 11.2425 20 11.2425C18.441 11.2425 16.9208 11.7283 15.6507 12.6323C14.3807 13.5364 13.4239 14.8137 12.9134 16.2868C12.403 17.7598 12.3642 19.3553 12.8026 20.8514C13.241 22.3475 14.1347 23.6698 15.3594 24.6344C13.0794 25.5435 11.1191 27.1064 9.72501 29.1266C7.96339 27.1456 6.81199 24.6976 6.40945 22.0773C6.00691 19.4571 6.37039 16.7764 7.45613 14.358C8.54186 11.9395 10.3036 9.88653 12.5291 8.44615C14.7546 7.00577 17.349 6.23945 20 6.23945C22.651 6.23945 25.2454 7.00577 27.4709 8.44615C29.6965 9.88653 31.4582 11.9395 32.5439 14.358C33.6296 16.7764 33.9931 19.4571 33.5906 22.0773C33.188 24.6976 32.0366 27.1456 30.275 29.1266Z"
                                        fill="#374151" />
                                </svg>
                            </div>
                            <?php 
                                $nim = ($this->session->userdata('nim') == 0 ? $this->session->userdata('nim_tpb') : $this->session->userdata('nim'));
                                $getUser = $this->M_admin->getUserProfile($nim); 
                            ?>
                            <span class="block text-sm text-[#374151] dark:text-white ml-[5px]">
                                <?php echo $this->session->userdata('name_user') ;?>
                                <?php $User = $this->session->userdata('id_ITB') ;?>

                                <?php if(!empty($User)){ ?>
                                <?php $username = $this->session->userdata('id_ITB') ;?>
                                
                                <?php } else { ?>
                                <?php $username = $this->session->userdata('username') ;?>
                                <?php } ?>
                            </span>
                            <small class="text-muted">
                                <?=$this->session->userdata('nama_prodi') ;?>
                                <?php $jenjang = $this->session->userdata('prodi_jenjang') ;?>
                                <?php if($jenjang) { ?>
                                Jenjang <?php echo $this->session->userdata('prodi_jenjang') ;?>
                                <?php } else { }?>
                            </span>
                        </div>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <a class="" href="<?=base_url().'admin/prestasi/user_profile/'.$username;?>">
                            <div
                                class="flex justify-start items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M14.4325 13.25C13.4807 11.6044 12.0138 10.4244 10.3019 9.86499C11.1487 9.3609 11.8066 8.59279 12.1746 7.67861C12.5425 6.76444 12.6002 5.75474 12.3388 4.80459C12.0774 3.85444 11.5113 3.01636 10.7275 2.41907C9.94372 1.82178 8.98551 1.49829 8.00005 1.49829C7.01459 1.49829 6.05638 1.82178 5.27256 2.41907C4.48875 3.01636 3.92267 3.85444 3.66126 4.80459C3.39985 5.75474 3.45756 6.76444 3.82554 7.67861C4.19351 8.59279 4.8514 9.3609 5.69817 9.86499C3.9863 10.4237 2.51942 11.6037 1.56755 13.25C1.53264 13.3069 1.50949 13.3702 1.49945 13.4363C1.48942 13.5023 1.49271 13.5696 1.50912 13.6343C1.52554 13.6991 1.55476 13.7598 1.59504 13.8131C1.63533 13.8663 1.68587 13.911 1.74369 13.9444C1.8015 13.9778 1.86542 13.9992 1.93168 14.0075C1.99793 14.0158 2.06517 14.0108 2.12944 13.9926C2.1937 13.9745 2.25369 13.9437 2.30585 13.902C2.35802 13.8604 2.40131 13.8087 2.43317 13.75C3.61067 11.715 5.69192 10.5 8.00005 10.5C10.3082 10.5 12.3894 11.715 13.5669 13.75C13.5988 13.8087 13.6421 13.8604 13.6942 13.902C13.7464 13.9437 13.8064 13.9745 13.8707 13.9926C13.9349 14.0108 14.0022 14.0158 14.0684 14.0075C14.1347 13.9992 14.1986 13.9778 14.2564 13.9444C14.3142 13.911 14.3648 13.8663 14.4051 13.8131C14.4453 13.7598 14.4746 13.6991 14.491 13.6343C14.5074 13.5696 14.5107 13.5023 14.5006 13.4363C14.4906 13.3702 14.4675 13.3069 14.4325 13.25ZM4.50005 5.99999C4.50005 5.30776 4.70532 4.63107 5.0899 4.0555C5.47449 3.47992 6.02111 3.03132 6.66066 2.76641C7.3002 2.50151 8.00393 2.43219 8.68286 2.56724C9.3618 2.70229 9.98544 3.03563 10.4749 3.52512C10.9644 4.0146 11.2977 4.63824 11.4328 5.31718C11.5678 5.99611 11.4985 6.69984 11.2336 7.33938C10.9687 7.97892 10.5201 8.52555 9.94454 8.91014C9.36897 9.29472 8.69228 9.49999 8.00005 9.49999C7.07209 9.499 6.18243 9.12993 5.52627 8.47377C4.87011 7.81761 4.50104 6.92794 4.50005 5.99999Z"
                                        fill="#1C1C1C" />
                                </svg>
                                <span class="block text-sm text-[#4B5563] dark:text-white ml-[5px]">My Profile</span>
                            </div>
                        </a>
                        <a class="" href="<?=base_url().'admin/login/logout'?>">
                            <div
                                class="flex justify-start items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                    fill="none">
                                    <path
                                        d="M7 13.5C7 13.6326 6.94732 13.7598 6.85355 13.8536C6.75979 13.9473 6.63261 14 6.5 14H3C2.73478 14 2.48043 13.8946 2.29289 13.7071C2.10536 13.5196 2 13.2652 2 13V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H6.5C6.63261 2 6.75979 2.05268 6.85355 2.14645C6.94732 2.24021 7 2.36739 7 2.5C7 2.63261 6.94732 2.75979 6.85355 2.85355C6.75979 2.94732 6.63261 3 6.5 3H3V13H6.5C6.63261 13 6.75979 13.0527 6.85355 13.1464C6.94732 13.2402 7 13.3674 7 13.5ZM13.8538 7.64625L11.3538 5.14625C11.2599 5.05243 11.1327 4.99972 11 4.99972C10.8673 4.99972 10.7401 5.05243 10.6462 5.14625C10.5524 5.24007 10.4997 5.36732 10.4997 5.5C10.4997 5.63268 10.5524 5.75993 10.6462 5.85375L12.2931 7.5H6.5C6.36739 7.5 6.24021 7.55268 6.14645 7.64645C6.05268 7.74021 6 7.86739 6 8C6 8.13261 6.05268 8.25979 6.14645 8.35355C6.24021 8.44732 6.36739 8.5 6.5 8.5H12.2931L10.6462 10.1462C10.5524 10.2401 10.4997 10.3673 10.4997 10.5C10.4997 10.6327 10.5524 10.7599 10.6462 10.8538C10.7401 10.9476 10.8673 11.0003 11 11.0003C11.1327 11.0003 11.2599 10.9476 11.3538 10.8538L13.8538 8.35375C13.9002 8.30731 13.9371 8.25217 13.9623 8.19147C13.9874 8.13077 14.0004 8.06571 14.0004 8C14.0004 7.93429 13.9874 7.86923 13.9623 7.80853C13.9371 7.74783 13.9002 7.69269 13.8538 7.64625Z"
                                        fill="#1C1C1C" />
                                </svg>
                                <span class="block text-sm text-[#4B5563] dark:text-white ml-[5px]">Logout</span>
                            </div>
                        </a>

                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <?php $i=0; foreach($module as $k=>$mod){ ?>
                    <?php 
                    
                        $this->load->model('M_bansos_ormawa');
                        $data['nim']= $profil['nim'];
                        $nim=$profil['nim'];
                        if($nim != 0){
                            $hasil = $this->M_bansos_ormawa->cek_user($nim);
                            $nim=$profil['nim'];
                            
                            } else {
                            $nim_tpb=$profil['nim_tpb'];
                            $hasil = $this->M_bansos_ormawa->cek_user($nim_tpb);
                        }
                        
                    ?> 
                    <?php if($hasil->num_rows() >= 0 && $mod['menu']->id == 111 || $mod['menu']->id == 1 || $mod['menu']->id == 198 || $mod['menu']->id == 172 || $mod['menu']->id == 87){?>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar<?php echo $i;?>"
                                class="flex items-center justify-between w-full py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-gray-200 md:p-0 md:w-auto font-light">
                                <?php echo $mod['menu']->nama ?>
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar<?php echo $i;?>"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <?php if(count($mod['child']) > 0 ){ ?>
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                    aria-labelledby="dropdownLargeButton">
                                    <?php foreach($mod['child'] as $r){ ?>
                                    <li>
                                        <a href="<?=base_url('admin/'.$r->controller)?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> <?=$r->nama ?></a>
                                    </li>
                                    <?php }?>
                                </ul>
                                <?php } ?>     
                            </div>
                        </li>
                    <?php }?>
                    <!-- <li>
                        <a href="#"
                            class="block py-2 px-3 font-light text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-100 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">SiPandai</a>
                    </li> -->
                    <?php $i++;}?>
                </ul>
            </div>
        </div>
    </nav>