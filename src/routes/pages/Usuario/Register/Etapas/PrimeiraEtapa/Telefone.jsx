import React, { useState } from 'react';
import { View, Text, TextInput, Pressable, StyleSheet, ImageBackground } from 'react-native';
import * as Animado from 'react-native-animatable';
import AsyncStorage from '@react-native-async-storage/async-storage';

export default function LoginTelefone({ navigation }) {
  const [telefone, setTelefone] = useState('');

  const salvarTelefone = async () => {
    if(telefone != '')
    {
      try {
        AsyncStorage.setItem('Telefone', telefone)
        .then(() => {
        console.log('Telefone armazendo com sucesso!');
        navigation.navigate('CodigoDeAcessoTelefoneRegistro')})
      } catch (error) {
        console.error('Erro ao criar nome', error );
        return false;
      }
    }
  }

  /*const formatPhoneNumber = (inputNumber) => {
    // Remove non-numeric characters
    const numericValue = inputNumber.replace(/[^\d]/g, '');

    // Apply phone number formatting (e.g., (xxx) xxx-xxxx)
    const formattedNumber = numericValue.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');

    setPhoneNumber(formattedNumber);
  };*/
  

  return (
    <View style={styles.container}>
      <ImageBackground
        source={require('../../../../../../../assets/img/cadastro/login/superiorDireita.png')}
        style={styles.superiorDireito}
      />
      <View style={styles.contentContainer}>
        <Animado.Text style={styles.title} animation="fadeInRight" duration={1500}>Entrar com número {'\n'}de telefone</Animado.Text>
        <Animado.Text style={styles.description} animation="fadeInRight" duration={1500}>
          Digite o seu número de telefone já utilizado em {'\n'}uma conta existente
        </Animado.Text>
        <TextInput
          style={styles.input}
          placeholder="(xx) xxxxx-xxxx"
          keyboardType="numeric"
          maxLength={15}
          onChangeText={setTelefone}
        />
        <Animado.View style={styles.buttonColumn} animation="fadeInRight" delay={850}>
          <Pressable style={styles.button2} onPress={() => salvarTelefone()}>
            <Text style={styles.buttonText2}>Prosseguir</Text>
          </Pressable>
        </Animado.View>
      </View>
      <ImageBackground
        style={styles.inferiorDireito}
        source={require('../../../../../../../assets/img/cadastro/login/inferiorDireito.png')}
      />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "center",  
    backgroundColor: "white",
    padding: 10,
  },
  contentContainer: {
    bottom: 80,
  },
  title: {
    fontSize: 30,
    fontWeight: 'bold',
    width: '80%',
    textAlign: 'left',
  },
  description: {
    marginBottom: 20,
    width: '100%',
    textAlign: 'left',
    fontSize: 16,
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
    width: 330,
    height: 50,
    alignItems: 'flex-end', 
  },
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 18,
    marginBottom: 20,
    paddingLeft: 15,
    width: 320,
    height: 50,
  },
  inferiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    bottom: 50,
    right: 0,
    width: 200,
    height: 200,
  },
  superiorDireito: {
    position: 'absolute',
    resizeMode: 'contain',
    top: -10,
    right: -20,
    width: 140,
    height: 140,
  },
});
