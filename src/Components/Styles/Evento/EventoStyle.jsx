import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#fff',
        flex:1,
        overflow: "hidden",
        heigh: '100%',
    },
    fundo: {
        position: 'absolute',
        alignSelf: 'center',
        alignItems:'center',
        justifyContent:'center',
        height: 150,
        width: '100%',
        //backgroundColor: '#ff1',
    },

    //Botão
    button: {
        backgroundColor: '#E6AEB2',
        margin: 10,
        borderRadius: 10,
        width: 250,
        height: 50,
        alignItems: 'center',
        justifyContent: 'center',
    },
    buttonText: {
        fontSize: 25,
        color: '#6D9EAF',
        textAlign: 'center',
        alignSelf: 'center'
    },

    //Exemplos de centros educacionais
    EventoArea: {
        width: '85%',
        //backgroundColor: '#D0F1B7',
        alignSelf: 'center',
        borderRadius: 20,
        alignItems: 'center',
        marginTop: 120
    },
    Foto: {
        height: 150,
        width: 270,
    },
    Descricao: {
        alignItems: 'center',
        justifyContent: 'center',
        width: '100%',
        paddingRight: 5,
    },
    InfosArea: 
    {
        width: '100%',
        height: 100,
        alignSelf: 'center',
        alignItems: 'center',
        margin: 10
    },
    Infos:
    {
        alignSelf: 'center',
        alignItems: 'center',
        flexDirection:'row',
        marginLeft: 10,
        marginRight: 10,
        width: '40%',
    },
    InfosText:
    {
        fontSize: 13,
        textAlign: 'center',
        color: '#A6A6A6',
        textAlign: 'justify',
        marginLeft: 5,
    },
    InfosRows:
    {
        flexDirection:'row',
        justifyContent: 'center',
        alignItems: 'center',
        flex: 1,
    },
    
  });
export default styles;

/*Azul - #6d9eaf
Rosa - #e6aeb2
Amarelo - #ffd932
Verde - #a5f866
Vermelho - #fd5620
Laranja - #EBD574*/