<template>
    <div class="card-box">
        <div class="table-rep-plugin">
            <div class="table-responsive" data-pattern="priority-columns">
                <table id="tech-companies-1" class="table  table-striped">
                    <thead>
                    <tr>
                        <th data-priority="1">No</th>
                        <th data-priority="2">Username</th>
                        <th data-priority="3">Name</th>
                        <th data-priority="4">Email</th>
                        <th data-priority="5">Type</th>
                        <th data-priority="6">Status</th>
                        <th data-priority="6">Created</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(item,index) in pagination.data">
                        <th>{{index+1}}</th>
                        <td>{{item.username}}</td>
                        <td>{{item.firstname}} {{item.lastname}} </td>
                        <td>{{item.email}}</td>
                        <td>{{item.type}}</td>
                        <td>{{item.status}}</td>
                        <td>{{new Date(item.created_at*1000).toLocaleString()}}</td>
                    </tr>


                    </tbody>
                </table>
                <div class="dataTables_paginate paging_simple_numbers pull-right">
                    <paginate
                            :pageCount="pagination.last_page ? pagination.last_page : 1"
                            :clickHandler="pageRedirect"
                            :prevText="'Prev'"
                            :nextText="'Next'"
                            :containerClass="'pagination'"
                            :next-class="'paginate_button page-item nexts  '"
                            :prev-class="'paginate_button page-item previous '"
                            :page-class="'paginate_button'">
                        >
                    </paginate>
                </div>
            </div>
            </div>

    </div>

</template>

<script>
    import UserService from '../../../services/UserService';
    import Helper from '../../../helper';

    export default {
        name: "UserPage",
        components: {},
        data() {
            return {
                keyword: '',
                users: null,
                pagination: {
                    data: [],
                    last_page: 0,
                    total: 0
                },
                page: 1,
                action_user_list: 'user-list',
                action_user_change_status: 'change-status',
            }
        },
        created() {
            this.load();
        },
        mounted() {

            //example socket
            // this.$socket.emit('client_clear_time');
            // this.$socket.emit("status_button_client",{user:this.getStoreUser()});
        },
        methods: {
            pageRedirect(page) {
                this.page = page;
                this.load(this.page, this.keyword);
            },
            async load(page = 1, keyword = '') {
                var users = await UserService.getUserList({
                    action: this.action_user_list,
                    keyword: keyword,
                    page: page
                });
                this.pagination = users.data.pagination;


            },

            async changeStatusAccount(item) {
                await UserService.updateStatus({
                    action: this.action_user_change_status,
                    user_id: item.user_id,
                    status: item.status
                });
                this.load(this.page, this.keyword);
            }
        }, watch: {
            'keyword': function (new_value, old_value) {
                var _this = this;
                setTimeout(() => {
                    _this.load(1, new_value);
                }, 500)
            }
        }


    }
</script>

<style scoped>

</style>
