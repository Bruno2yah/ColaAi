import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#fff',
        flex:1,
        overflow: "hidden",
        heigh: '100%',
    },
    fundo: {
        alignSelf: 'center',
        alignItems:'center',
        justifyContent:'center',
        flexDirection:'row',
        width: '100%',
        marginTop: 50
    },

    imageBanner:{
        width: '100%',
        height: 160,
        backgroundColor: '#FDE681',
        top: 0,
    },
    imagePerfil: {
        width: 125,
        height: 125,
        backgroundColor: '#6d9eaf',
        alignSelf: 'flex-start',
        alignItems: 'center',
        justifyContent: 'center',
        borderRadius: 90,
        position: 'absolute',
        marginTop: 85,
        marginLeft: 30
    },
    descOrganizacao: {
        width: '85%',
        alignSelf: 'center',
        alignItems: 'center',
        flexDirection:'row',
    },
    btnSeguir: {
        backgroundColor: '#E6AEB2',
        marginTop: 10,
        borderRadius: 10,
        width: 110,
        height: 40,
        alignItems: 'center',
        justifyContent: 'center',
    },

    //Botão
    button: {
        backgroundColor: '#E6AEB2',
        margin: 10,
        borderRadius: 17,
        width: 215,
        height: 60,
        alignItems: 'center',
        justifyContent: 'center',
    },
    buttonText: {
        fontSize: 20,
        color: '#6D9EAF',
        textAlign: 'center',
        alignSelf: 'center'
    },

    //Exemplos de centros educacionais
    FotosArea: {
        height: 400,
        width: '85%',
        backgroundColor: '#FDE681',
        alignSelf: 'center',
        borderRadius: 20,
        alignItems: 'center',
        paddingTop: 15,
        paddingBottom: 15,
        marginTop: 50
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
Laranja - #FDE681*/