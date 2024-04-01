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
      marginLeft: 10,
      
    },
    texto: {
      fontSize: 23,
      color: 'grey',
      marginBottom: 3,
      fontWeight: 'bold'
    },
    texto2: {
      fontSize: 16,
      color: 'grey',
    },
    formulario: {
      width: '100%',
      paddingHorizontal: 20,
      marginBottom: 3,
      flex: 1,
      justifyContent: 'flex-start',
    },
    input: {
      marginBottom: 10,
      borderBottomWidth: 2,
      borderColor: 'grey',
      color: 'grey',
    },
    input2: {
      borderWidth: 2,
      borderRadius: 7,
      borderColor: 'grey',
      height: 40,
      justifyContent: 'space-between',
      flexDirection: 'row',
      paddingHorizontal: 10,
      alignItems: 'center'
    },
    comentario: {
      borderWidth: 2,
      borderRadius: 7,
      borderColor: 'grey',
      paddingHorizontal: 4,
      color: 'grey'
    },
    image: {
      width: 150,
      height: 150,
      borderRadius: 10,
      marginBottom: 10,
    },
    icon: {
      width: 100,
      height: 100,
      resizeMode: 'contain',
    },
    fundoModal: {
      flex: 1,
      backgroundColor: '#00000070',
      justifyContent: 'center',
      alignItems: 'center',
    },
    conteudoModal: {
      width: '60%',
      height: '50%',
      borderWidth: 2,
      borderRadius: 15,
      backgroundColor: 'white',
      justifyContent: 'center',
      alignItems: 'center',
      borderColor: 'grey'
    },
    botao: {
      borderWidth: 2,
      borderRadius: 10,
      alignItems: 'center',
      padding: 10,
      marginTop: 10
    },
    enviar: {
      height: 40,
      width: 120,
      backgroundColor: '#e6aeb2',
      borderRadius: 10,
      justifyContent: 'center',
      alignItems: 'center'
    },
    voltar: {
      width: '100%',
      alignItems: 'flex-start',
      justifyContent: 'center',
      paddingHorizontal: 10,
      flex: 0.25,
    },
    trocarImagem: {
      fontSize: 15,
      color: 'red'
    }
  });

export default styles;