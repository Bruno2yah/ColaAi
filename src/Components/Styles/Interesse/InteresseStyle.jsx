import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
      justifyContent: 'center',
      alignItems: 'center',
      backgroundColor: 'white',
      flex: 1
    },
    titulo: {
      fontSize: 30,
      fontWeight: 'bold',
      color: 'grey',
      marginLeft: 10
    },
    texto: {
      fontSize: 19,
      color: 'grey',
      textAlign: 'justify',
      paddingHorizontal: 15
    },
    textoConfig: {
      fontSize: 17,
      color: 'grey',
      textAlign: 'justify',
      width: '65%',
    },
    cards: {
      //backgroundColor: '#ff1',
      height: '100%',
      width: '100%',
      flex: 1,
  },

  ProgArea: {
    height: 360,
    width: '85%',
    backgroundColor: '#D0F1B7',
    alignSelf: 'center',
    borderRadius: 20,
    alignItems: 'center',
    paddingTop: 15,
    paddingBottom: 15,
    marginTop: 30
  },
  Foto: {
    height: '40%',
    width: '85%',
    borderRadius: 15,
  },
  TituloCard: {
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
  },
  Infos:
  {
      flex: 1,
      alignSelf: 'center',
      alignItems: 'center',
      flexDirection:'row',
      marginLeft: 10,
      marginRight: 10,
      width: '50%',
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
  button: {
    backgroundColor: '#E6AEB2',
    margin: 10,
    borderRadius: 8,
    width: 110,
    height: 40,
    alignItems: 'center',
    justifyContent: 'center',
  },
  buttonText: {
      fontSize: 17,
      color: '#6D9EAF',
      textAlign: 'center',
      alignSelf: 'center'
  },
  button2: {
    backgroundColor: '#6D9EAF',
    margin: 10,
    borderRadius: 8,
    width: 170,
    height: 40,
    alignItems: 'center',
    justifyContent: 'center',
  },
  buttonText2: {
      fontSize: 17,
      color: '#E6AEB2',
      textAlign: 'center',
      alignSelf: 'center'
  },

  });

export default styles;