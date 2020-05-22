<template>
    <div>
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="user text-center">
                        <a class="nav-link" data-toggle="dropdown" href="/profile">
                            <i class="fa fa-user-circle"> {{fullName}}</i>
                        </a>
                        <small> <b>You are login as {{roleName}}</b> | <a href="#" data-toggle="modal" data-target="#modal-logout">Change Password</a> | <a href="#" data-toggle="modal" data-target="#modal-logout">Sign out</a></small>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="modal fade" id="modal-logout">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Sign Out</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to logout ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <a href="/logout"> <button type="button"  class="btn btn-primary">Yes</button></a>
                    </div>
                </div>
            </div>
        </div>
        <aside class="main-sidebar sidebar-dark-primary elevation-1">
            <a href="/dashboard" class="brand-link">
                <span class="brand-text font-weight-light"><b><i class="fa fa-desktop"></i> ERP-DASHBOARD</b></span>
            </a>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-database"></i>
                            <p>
                                Stock Management
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadAdminPage/addUser/')">
                            <i class="nav-icon fa fa-user-plus"></i>
                            <p>Stock In</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadAdminPage/ListUser/')">
                            <i class="nav-icon fa fa-users"></i>
                            <p>Sales</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <div class="dropdown-divider"></div>
                   <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="fa fa-users"></i>
                            <p>
                                HR Management
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right"></span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadAdminPage/addUser/')">
                            <i class="nav-icon fa fa-user-plus"></i>
                            <p>Stock In</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" onclick="loadpage('<?php echo base_url();?>index.php?adminController/loadAdminPage/ListUser/')">
                            <i class="nav-icon fa fa-users"></i>
                            <p>Sales</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.loadData();
        },
        data(){
            return {
                confirmation: false,
                userName: '',
                fullName: '',
                roleName: '',
            }
        },
        methods: {
            loadData(){
                axios.get("/getuserdetails").then(response => {
                    this.fullName=response.data.data.name;
                    this.userName=response.data.data.email;
                    this.roleName=response.data.data.Role_Name;
                });
            },
           
        }

    }
</script>
