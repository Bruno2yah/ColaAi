import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#fff',
        flex:1,
        overflow: "hidden",
        heigh: '100%',
    },
    cards: {
        //backgroundColor: '#ff1',
        height: '100%',
        width: '100%',
        top: "60%",
        flex: 1,
    },
    fundo: {
        position: 'absolute',
        alignSelf: 'center',
        alignItems:'center',
        justifyContent:'center',
        height: 200,
        width: '100%',
        marginTop: '10%',
        //backgroundColor: '#ff1',
    },

    //Botão
    button: {
        backgroundColor: '#E6AEB2',
        padding: 10,
        margin: 10,
        borderRadius: 17,
        width: 215,
        height: 60,
        alignItems: 'center',
        justifyContent: 'center',
    },
    buttonText: {
        fontSize: 35,
        color: '#6D9EAF',
        textAlign: 'center',
        alignSelf: 'center'
    },

    //Exemplos de centros educacionais
    TeatrosArea: {
        height: 400,
        width: '85%',
        backgroundColor: '#D0F1B7',
        alignSelf: 'center',
        borderRadius: 20,
        alignItems: 'center',
        paddingTop: 15,
        paddingBottom: 15,
    },
    TeatrosFoto: {
        height: '50%',
        width: '85%',
        borderRadius: 10,
    },
    TeatrosLocal: {
        alignItems: 'center',
        justifyContent: 'center',
        width: '100%',
        paddingRight: 5,
    },
    
  });
export default styles;

/*Azul - #6d9eaf
Rosa - #e6aeb2
Amarelo - #ffd932
Verde - #a5f866
Vermelho - #fd5620
Laranja - #EBD574*/