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
      marginTop: 35,
      flexDirection: 'row',
      justifyContent:  'space-between',
      alignItems: 'center',
    }

  });

export default styles;