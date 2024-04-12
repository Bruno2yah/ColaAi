import React, { useState } from 'react';
import { View, Text, TextInput, Pressable, StyleSheet, ImageBackground, Alert } from 'react-native';
import { useNavigation } from '@react-navigation/native';
import { MaterialCommunityIcons } from '@expo/vector-icons'; // Importa o ícone do Expo
import * as Animado from 'react-native-animatable';

export default function LoginEmail() {
  const navigation = useNavigation();
  const [showLoginForm, setShowLoginForm] = useState(false);
  const [selectedForm, setSelectedForm] = useState(0);
  const [passwordVisible, setPasswordVisible] = useState(false);
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');

  const handleButtonPress = () => {
    setShowLoginForm(true);
    navigation.navigate('CodigoDeAcessoEmail');

    if (!email.includes('@') || !email.includes('.com')) {
      Alert.alert('Erro', 'Por favor, insira um endereço de e-mail válido.');
      setSelectedForm(1);
    } else {
      setShowLoginForm(false);
    }
  };

  return (
    <View style={styles.container}>
      <ImageBackground
        source={require('../../../../../../assets/img/cadastro/login/superiorDireita.png')}
        style={styles.superiorDireito}
      />
      <Animado.View style={styles.centeredContent}>
        <Animado.View style={styles.formContainer}>
          <Animado.View style={styles.text}>
            <Animado.Text style={styles.title} animation="fadeInRight">Entrar com e-mail</Animado.Text>
            <Animado.Text style={styles.description} animation="slideInRight">Digite dados de login já existentes.</Animado.Text>
          </Animado.View>
          <TextInput
            style={styles.input}
            placeholder="Digite seu e-mail"
            onChangeText={(text) => setEmail(text)}
          />
          <View style={styles.passwordContainer}>
            <TextInput
              style={styles.input}
              placeholder="Digite sua senha"
              secureTextEntry={!passwordVisible}
              onChangeText={(text) => setPassword(text)}
              keyboardType="numeric"
            ></TextInput>
            <Pressable
              style={styles.eyeIcon}
              onPress={() => setPasswordVisible(!passwordVisible)}
            >
              <MaterialCommunityIcons
                name={passwordVisible ? 'eye-off' : 'eye'}
                size={24}
                color="#6D9EAF"
              />
            </Pressable>
          </View>
          <Pressable>
            <Text style={styles.esqueci}>Esqueci a senha</Text>
          </Pressable>
          <Animado.View style={styles.buttonColumn} animation="fadeInRight" delay={500}>
            <Pressable style={styles.button2} onPress={handleButtonPress}>
              <Text style={styles.buttonText2}>Prosseguir</Text>
            </Pressable>
          </Animado.View>
        </Animado.View>
      </Animado.View>
      <ImageBackground
        style={styles.inferiorDireito}
        source={require('../../../../../../assets/img/cadastro/login/inferiorDireito.png')}
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
  centeredContent: {
    width: '100%',
    alignItems: 'center',
    
  },
  formContainer: {
    width: '80%', // ou o valor desejado para a largura do formulário
    alignItems: 'center',
    bottom:80,
  },
  text:{
    width: '100%',
    alignItems: "flex-start",

  },
  title: {
    fontSize: 35,
    fontWeight: "bold",
      textAlign: "left",
  },
  description: {
    marginBottom: 20,
    textAlign: "left",
    fontSize: 16,
  },
  buttonText1: {
    fontSize: 22,
    color: '#FABDC1',
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
    width: 330,
    height: 50,
    alignItems: "flex-end"
  },
  inputContainer: {
    width: '90%',
    marginTop: 20,
  },
  label: {
    color: '#666',
    marginTop: 10,
  },
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    width: 300,
    height: 50,
  },
  esqueci: {
    width: 300,
    height: 50,
    alignItems: "flex-start",
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
  },
  passwordContainer: {
    flexDirection: 'row',
    alignItems: 'center',
  },
  passwordInput: {
    flex: 1,
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    height: 50,
  },
  eyeIcon: {
    padding: 10,
      position: 'absolute',
      right: -10,
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
    top: 0,
    right: -10,
    width: 140,
    height: 140,
  },
});