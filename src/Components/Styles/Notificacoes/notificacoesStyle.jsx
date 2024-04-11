import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
      justifyContent: 'center',
      alignItems: 'center',
      backgroundColor: 'white',
      flex: 1
    },
    titulo: {
      fontSize: 35,
      fontWeight: 'bold',
      color: 'grey',
      marginLeft: 10
    },
    texto: {
      fontSize: 19,
      color: 'grey',
      textAlign: 'justify'
    },
    textoConfig: {
      fontSize: 17,
      color: 'grey',
      textAlign: 'justify',
      width: '65%',
    },
    formulario: {
      width: '100%',
      paddingHorizontal: 5,
      marginBottom: 10,
      flex: 1,
    },
    configRows: {
      marginTop: 15,
      flexDirection: 'row',
      justifyContent:  'space-between',
      alignItems: 'center',
    },
    fundo: {
        flex: 1,
        alignSelf: 'center',
        alignItems:'center',
        justifyContent:'center',
        height: 80,
        width: '100%',
        marginTop: 85,
        //backgroundColor: '#ff1',
    },
    cards: {
        //backgroundColor: '#ff1',
        height: '100%',
        width: '100%',
        flex: 1,
        marginTop: 150
    },
    texto: {
        fontSize: 23,
        color: 'grey',
        marginBottom: 3,
        fontWeight: 'bold'
      },
  });

export default styles;