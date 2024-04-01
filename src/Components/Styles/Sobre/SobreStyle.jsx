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
      paddingHorizontal: 22,
      textAlign: 'justify'
    },
    formulario: {
      width: '100%',
      paddingHorizontal: 9,
      marginBottom: 3,
      flex: 1,
      justifyContent: 'flex-start',
    },
  });

export default styles;