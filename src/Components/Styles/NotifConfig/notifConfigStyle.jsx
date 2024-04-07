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
      fontSize: 18,
      color: 'grey',
      textAlign: 'left',
      width: '80%'
    },
    formulario: {
      width: '100%',
      paddingHorizontal: 15,
      marginBottom: 3,
      flex: 1,
      marginTop: 20,
    },
    configRows: {
      marginTop: 35,
      flexDirection: 'row',
      justifyContent:  'space-between',
      alignItems: 'center',
    }

  });

export default styles;