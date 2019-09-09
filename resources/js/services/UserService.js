import Api from './index'

export default {
    getUserList(data) {
        return Api().post('/dashboard/user/doAction',data)
    }

}