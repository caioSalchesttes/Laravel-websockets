<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12" style="height: 400px; overflow: auto;flex-direction: column-reverse; display: flex;">
                            <tr v-for="dados in mensagens">
                                <td>{{ dados.mensagem }}</td>
                            </tr>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div style="display: flex">
                                    <input type="text" @keyup.enter="sendMessage" class="form-control"
                                           v-model="new_text">
                                    <button @click="sendMessage" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            mensagens: [],
            sessao: '',
            new_text: '',
        };
    },
    mounted() {
        axios.get('/api/show')
            .then(response => {
                this.mensagens = response.data.mensagens;
                this.sessao = response.data.sessao;
                console.log(response)
            })
            .catch(e => {
                console.log(e);
            });
        console.log('Component mounted.')
        Echo.channel('SendMessage')
            .listen('SendMessage', (e) => {
                console.log(e)

                this.mensagens.push({
                    created_at: '"2022-04-15T16:13:14.000000Z"',
                    id: 2,
                    mensagem: e.message,
                    session_id: "2232323sd",
                    updated_at: '"2022-04-15T16:13:14.000000Z"'
                });
            })
    },
    methods: {
        sendMessage() {
            axios.post('/api/send', {
                message: this.new_text,
                sessao: this.sessao
            })
                .then(response => {
                    this.new_text = '';
                    console.log(response)
                })
                .catch(e => {
                    console.log(e);
                });
        }
    }
}
</script>
