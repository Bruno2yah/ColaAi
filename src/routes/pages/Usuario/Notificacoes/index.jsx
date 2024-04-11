import { View, Text, Pressable, Image, ScrollView, } from 'react-native';
import styles from '../../../../Components/Styles/Notificacoes/notificacoesStyle';
import NavBar from '../../../../Components/NavBar/navbar';

export default function Sobre({ navigation }) {

  return (
      <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start', }}>
              <Image
                style={{ height: 94, width: 100 }}
                source={require('../../../../../assets/img/Notificacoes/superiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 90, width: 145 }}
                source={require('../../../../../assets/img/Notificacoes/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '94%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 115, width: 42, marginBottom: 70 }}
                source={require('../../../../../assets/img/Notificacoes/inferiorDireito.png')}
              />
            </View>
          </View>
        </View>
        
        <ScrollView>
            <View style={styles.fundo}>
                <Image
                style={{ height: 46, width: 300 }}
                source={require('../../../../../assets/img/Notificacoes/NotificacoesTxt.png')}
                />
            </View>
            <View style={styles.formulario}>
                <Text style={styles.texto}>Últimos 7 dias</Text>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100, borderRadius: 90 }}
                    source={require('../../../../../assets/img/Notificacoes/magma.png')}
                    />
                <Text style={styles.textoConfig}>
                    A organização Magma publicou novos eventos 
                </Text>
                </View>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100, borderRadius: 90 }}
                    source={require('../../../../../assets/img/Notificacoes/ceu.png')}
                    />
                    <Text style={styles.textoConfig}>
                    A organização CEU publicou novos eventos 
                    </Text>
                </View>
            </View>
            <View style={styles.formulario}>
                <Text style={styles.texto}>Últimos 30 dias</Text>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100, borderRadius: 90 }}
                    source={require('../../../../../assets/img/Notificacoes/centro.png')}
                    />
                    <Text style={styles.textoConfig}>
                        Uma nova organização se aliou a nós, à siga e veja seus futuros eventos 
                    </Text>
                </View>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100, borderRadius: 90 }}
                    source={require('../../../../../assets/img/Notificacoes/fabricas.jpg')}
                    />
                    <Text style={styles.textoConfig}>
                        Uma nova organização se aliou a nós, à siga e veja seus futuros eventos 
                    </Text>
                </View>
                <View style={styles.configRows}>
                    <Image
                    style={{ height: 100, width: 100, borderRadius: 90 }}
                    source={require('../../../../../assets/img/Notificacoes/ceu.png')}
                    />
                    <Text style={styles.textoConfig}>
                    A organização CEU publicou novos eventos 
                    </Text>
                </View>
            </View>
        </ScrollView>
        <NavBar />
    </View> 
  );
};