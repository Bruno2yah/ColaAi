import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#fff',
        flex:1,
        overflow: "hidden",
        heigh: '100%',
    },
    background: {
        backgroundColor: '#fff',
        height: '65%',
        width: '100%',
        top: "65%",
        borderStartStartRadius: 40,
        borderStartEndRadius: 40,
        //borderTopWidth: 5,
        //borderColor: '#CCCCCC',
        flex: 1,

        shadowColor: '#171717',
        shadowOpacity: 0.5,
        shadowRadius: 5,
        shadowOffset: {
            width: 0,
            height: -5,
          },
    },
    fundo: {
        position: 'absolute',
        alignSelf: 'center',
        alignItems:'center',
        justifyContent:'center',
        height: '30vw',
        width: '100%',
        marginTop: '23vw',
        //backgroundColor: '#ff1',
    },

    //Botões Coloridos
    buttonsArea: {
        flexDirection:'row',
        height: '30vw',
        width: '90%',
        alignSelf: 'center',
        position: 'relative',
        marginTop: '4vh',
        marginLeft: 30,
        marginRight: 30,
        marginBottom: 5,
        padding: 8,
        justifyContent: 'center',
        alignItems: 'center',
    },
    buttons: {
        flex: 1,
        heigh: 70,
        width: 50,
        flexDirection:'row',
        justifyContent:'space-between',
        alignItems: 'center',
        alignSelf: 'center',
        padding: 10,
        marginTop: 20,
        marginBottom: 20
    },

    //Exemplos de centros educacionais
    fabricasArea: {
        marginTop: '4vh',
        height: '30vw',
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
        marginTop: '4vh',
        height: '30vw',
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
        height: '25vw',
        width: '25vw',
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
Rosa - #
Amarelo - #ffd932
Verde - #a5f866
Vermelho - #fd5620
Laranja - #EBD574*/