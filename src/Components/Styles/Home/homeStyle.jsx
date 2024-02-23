import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#fff',
        flex:1,
        overflow: "hidden",
        height: '100%',
    },
    background: {
        backgroundColor: '#fff',
        height: '100%',
        width: '100%',
        borderTopLeftRadius:40,
        borderTopRightRadius:40,
        //borderTopWidth: 5,
        //borderColor: '#CCCCCC',
        flex: 1,
        marginTop: 300,
    },
    fundo: {
        position: 'absolute',
        alignSelf: 'center',
        alignItems:'center',
        justifyContent:'center',
        height: '40%',
        width: '100%',
        //backgroundColor: '#ff1',
    },

    //Botões Coloridos
    buttonsArea: {
        flexDirection:'row',
        height: '10%',
        width: '90%',
        alignSelf: 'center',
        position: 'relative',
        marginLeft: 30,
        marginRight: 30,
        justifyContent: 'center',
        alignItems: 'center',
        flex: 1,
    },
    buttons: {
        heigh: '100%',
        width: '100%',
        flexDirection:'row',
        justifyContent:'space-between',
        alignItems: 'center',
        alignSelf: 'center',
        marginTop: 20,
        marginBottom: 20,
    },

    //Exemplos de centros educacionais
    fabricasArea: {
        marginTop: '2%',
        padding: 8,
        width: '90%',
        backgroundColor: '#a5f866',
        alignSelf: 'center',
        borderRadius: 20,
        alignItems: 'center',
        justifyContent: 'center',
        flexDirection:'row',
    },
    CentrosArea: {
        marginTop: '5%',
        marginBottom: '5%',
        padding: 8,
        width: '90%',
        backgroundColor: '#EBD574',
        alignSelf: 'center',
        borderRadius: 20,
        alignItems: 'center',
        justifyContent: 'center',
        flexDirection:'row',
    },
    CentrosFoto: {
        height: 100,
        width: 100,
        borderRadius: 90,
    },
    CentrosTextos: {
        alignItems: 'center',
        justifyContent: 'center',
        width: '70%',
        paddingRight: 5
    },
    
  });
export default styles;

/*Azul - #6d9eaf
Rosa - #e6aeb2
Amarelo - #ffd932
Verde - #a5f866
Vermelho - #fd5620
Laranja - #EBD574*/