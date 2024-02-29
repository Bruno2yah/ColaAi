import React from 'react';
import { View, Text,  TouchableOpacity, StyleSheet, TextInput, ImageBackground} from 'react-native';


export default function TelaFinal2({ navigation }) {
  return (
    <View style={styles.container}>
       <ImageBackground
            source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
            style={styles.superiorDireito}
          />
        <View style={styles.contentContainer}>
        <View style={styles.Text}>
          <Text style={styles.title}>Perfil atualizado {'\n'}com sucesso!</Text>
          <Text style={styles.description}>Caso necessite fazer atualizações acesse a aba {'\n'} de perfil, podendo assim editar o perfil da {'\n'} organização  qualquer momento.</Text>
        </View>
          <View style={styles.buttonColumn}>
          <TouchableOpacity style={styles.button2}>
            <Text style={styles.buttonText2} onPress={() => navigation.navigate('Home')}>Acessar</Text>
          </TouchableOpacity>
          </View>
        </View>
        <ImageBackground
        style={styles.inferiorEsquerdo}
        source={require('../../../../../../../assets/img/cadastro/login/InferiorEsquerda.png')}
        />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "flex-start",
    backgroundColor: "white",
    height: '100%',
    width: '100%',
    padding: 10,
  },
  contentContainer: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    width: '100%',
    bottom: 80
  },
  title: {
    fontSize: 30,
    fontWeight: "bold",
    marginBottom: 10,
    textAlign: "left",
  },
  text:{
    width: '100%',
    alignItems: "flex-start",
    right: -20,
  },
  description: {
    marginBottom: 20,
    textAlign:"left",
    fontSize: 16,
  },
  buttonText1: {
    fontSize: 22,
    color: '##FABDC1',
    textAlign: 'center',
  },
  button1: {
    backgroundColor: '#6D9EAF',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 300,
    height: 50,
  },
  buttonText2: {
    fontSize: 22,
    color: "#6D9EAF",
    textAlign: "center",
  },
  button2: {
    backgroundColor: "#FABDC1",
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 170,
    height: 50,
  },
  buttonColumn: {
    width:'100%',
    height: 50,
    alignItems:"flex-end"
  },
 
  linkText: {
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
   
  },
  buttonPular:{
    justifyContent:'flex-end',
    alignItems:'center',
    width:'100%',
    height:'100%',
    position:'absolute',
    bottom:20
  },
  inferiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 50,
    right: -30,
    width: 200,
    height: 200,
  },
  superiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    top: 0,
    right: -10,
    width: 140,
    height: 140,
  },
  superiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    top: 0,
    right: -10,
    width: 140,
    height: 140,
  },
  inferiorEsquerdo: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 100,
    left: -20,
    width: 200,
    height: 200,
  },

  });


