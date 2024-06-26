import React from 'react';
import { View, Text,  Pressable, StyleSheet } from 'react-native';


export default function TelaFinal2({ navigation }) {
  return (
    <View style={styles.container}>
        <View style={styles.container}>
          <Text style={styles.title}>Perfil atualizado com sucesso!</Text>
          <Text style={styles.description}>Caso necessite fazer atualizações acesse a aba de perfil, podendo assim editar o perfil da organização  qualquer momento.</Text>
          <View style={styles.buttonColumn}>
          <Pressable style={styles.button2}>
            <Text style={styles.buttonText2} onPress={() => navigation.navigate('HomeUsuario')}>Acessar</Text>
          </Pressable>
          </View>
        </View>
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
  title: {
    fontSize: 24,
    fontWeight: "bold",
    marginBottom: 10,
    textAlign: "left",


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

  }

  });


